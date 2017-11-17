<?php namespace Btybug\Console\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Console\Models\UnitUpload;
use App\Modules\Resources\Models\Files\FileUpload;
use App\Modules\Resources\Models\Validation as validateUpl;
use File;
use Illuminate\Http\Request;
use Resources;
use Btybug\btybug\Models\Templates\Units;
use Btybug\btybug\Services\CmsItemReader;
use Btybug\btybug\Services\CmsItemUploader;
use View;


class FieldUnitsController extends Controller
{

    private $helpers = null;

    private $up;

    private $tp;

    private $types;

    private $upload;

    public function __construct(validateUpl $validateUpl)
    {
        $this->upload = new CmsItemUploader('units');
        $this->validateUpl = new $validateUpl;
        $this->up = config('paths.ui_elements_uplaod');
        $this->tp = config('paths.units_path');
        $this->types = @json_decode(File::get(config('paths.unit_path') . 'configFieldUnitTypes.json'), 1)['types'];
        $this->unitTypes = @json_decode(File::get(config('paths.unit_path') . 'configFieldUnitTypes.json'), 1)['types'];
        $this->specialTypes = @json_decode(File::get(config('paths.unit_path') . 'configSpecialUnitTypes.json'), 1)['types'];
    }

    public function getIndex(Request $request)
    {
        $slug = $request->get('p');
        $type = $request->get('type', 'fill');
        $types = [];
        $ui_elemements = null;
        $unit = null;
        if (count($this->unitTypes)) {
            foreach ($this->unitTypes as $unitType) {
                $types[$unitType['foldername']] = $unitType['title'];
            }

            $main_type = $this->unitTypes[0]['foldername'];
            if ($type) {
                $main_type = $type;
            }

            $ui_elemements = CmsItemReader::getAllGearsByType('units')->where('place', 'backend')->where('type', 'general_fields')->run();
            if ($slug) {
                $unit = CmsItemReader::getAllGearsByType('units')
                    ->where('place', 'backend')
                    ->where('type', 'general_fields')
                    ->where('slug', $slug)
                    ->first();
            } elseif (count($ui_elemements)) {
                $unit = CmsItemReader::getAllGearsByType('units')
                    ->where('place', 'backend')
                    ->where('type', 'general_fields')
                    ->first();
            }
        }
        return view("console::backend.gears.fields.index", compact(['ui_elemements', 'types', 'unit', 'type']));
    }


    public function getUnit($type)
    {
        $ui_units = Units::getAllUnits()->run();

        return view('resources::units', compact(['ui_units']));
    }

    public function getGeneralFields()
    {

        return view("console::backend.gears.fields.general");
    }

    public function getSpecialFields(Request $request)
    {
        $slug = $request->get('p');
        $type = $request->get('type', 'users');
        $types = [];
        $ui_elemements = null;
        $unit = null;
        if (count($this->specialTypes)) {
            foreach ($this->specialTypes as $unitType) {
                $types[$unitType['foldername']] = $unitType['title'];
            }

            $main_type = $this->specialTypes[0]['foldername'];
            if ($type) {
                $main_type = $type;
            }

            $ui_elemements = CmsItemReader::getAllGearsByType('units')->where('place', 'backend')->where('type', $type)->run();
            if ($slug) {
                $unit = CmsItemReader::getAllGearsByType('units')
                    ->where('place', 'backend')
                    ->where('type', $type)
                    ->where('slug', $slug)
                    ->first();
            } elseif (count($ui_elemements)) {
                $unit = CmsItemReader::getAllGearsByType('units')
                    ->where('place', 'backend')
                    ->where('type', $type)
                    ->first();
            }
        }
        return view("console::backend.gears.fields.special", compact(['ui_elemements', 'types', 'unit', 'type']));
    }

    public function getUnitVariations($slug)
    {
        $unit = Units::find($slug);
        if (!count($unit)) return redirect()->back();
        $variation = [];
        $variations = $unit->variations();

        return view('resources::units.variations', compact(['unit', 'variations', 'variation'])
        );
    }


    public function postUnitWithType(Request $request)
    {
        $main_type = $request->get('main_type');
        $general_type = $request->get('type', null);

        if ($general_type) {
            $ui_units = Units::getAllUnits()->where('main_type', $main_type)->where('type', $general_type)->run();
        } else {
            $ui_units = Units::getAllUnits()->where('type', $main_type)->run();
        }

        $html = View::make('resources::units._partials.list_cube', compact(['ui_units']))->render();

        return \Response::json(['html' => $html, 'error' => false]);
    }

    public function postUnitVariations(Request $request, $slug)
    {
        $ui = Units::find($slug);
        if (!$ui) return redirect()->back();
        $ui->makeVariation($request->except('_token', 'ui_slug'))->save();

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDeleteVariation(Request $request)
    {
        $result = false;
        if ($request->slug) {
            $result = Units::deleteVariation($request->slug);
        }
        return \Response::json(['success' => $result]);
    }

    public function postUploadUnit(Request $request)
    {
        return $this->upload->run($request);
    }

    public function getDeleteUnit($id)
    {
        $variation = Units::deleteVariation($id);

        return redirect()->back();
    }

    public function postDelete(Request $request)
    {
        $slug = $request->get('slug');
        $unit = CmsItemReader::getAllGearsByType('units')
            ->where('place', 'backend')
            ->where('slug', $slug)
            ->first();
        if ($unit) {
            $deleted = $unit->deleteGear();
            return \Response::json(['success' => $deleted, 'url' => url('/admin/console/backend/units')]);
        }
    }

    public function getSettings(Request $request)
    {
        if ($request->slug) {
            $view = Units::renderLivePreview($request->slug, 'backend');
            return $view ? $view : abort('404');
        } else {
            abort('404');
        }
    }

    public function unitPreview($id)
    {
        $slug = explode('.', $id);
        $ui = Units::find($slug[0]);
        $variation = Units::findVariation($id);

        if (!$variation) return redirect()->back();

        $ifrem = [];
        $settings = (isset($variation->settings) && $variation->settings) ? $variation->settings : [];

        $ifrem['body'] = url('/admin/console/backend/general-fields/settings-iframe', $id);
        $ifrem['settings'] = url('/admin/console/backend/general-fields/settings-iframe', $id) . '/settings';

        return view('console::backend.gears.preview', compact(['ui', 'id', 'ifrem', 'settings']));

    }

    public function unitPreviewIframe($id, $type = null)
    {
        $slug = explode('.', $id);
        $ui = Units::find($slug[0]);
        $variation = Units::findVariation($id);
//        if (!$variation) return redirect()->back();
        $settings = (isset($variation->settings) && $variation->settings) ? $variation->settings : [];
        $extra_data = 'some string';
        if ($ui->main_type == 'data_source') {
            $extra_data = BBGiveMe('array', 3);
        }
        $htmlBody = $ui->render(['settings' => $settings, 'source' => $extra_data, 'cheked' => 1, 'field' => null]);
        $htmlSettings = $ui->renderSettings(compact('settings'));
        $settings_json = json_encode($settings, true);

        return view('console::backend.gears.fields._partials.unit_preview', compact(['htmlBody', 'htmlSettings', 'settings', 'settings_json', 'id', 'ui']));
    }

    public function postSettings(Request $request)
    {
        $output = Units::saveSettings($request->id, $request->itemname, $request->except(['_token', 'itemname']), $request->save);
        $result = $output ? ['html' => $output['html'], 'error' => false, 'url' => url('/admin/console/backend/general-fields/settings', ['slug' => $output['slug']])] : ['error' => true];
        return \Response::json($result);
    }

    public function getDefaultVariation($id)
    {
        $data = explode('.', $id);
        $unit = Units::find($data[0]);

        if (!empty($data) && $unit) {
            foreach ($unit->variations() as $variation) {
                $variation->setAttributes('default', 0);
                $variation->save();
            }

            $variation = Units::findVariation($id);
            $variation->setAttributes('default', 1);
            $variation->save();

            return redirect()->back()->with('message', 'New Default variation is ' . $variation->title);
        }

        return redirect()->back();
    }

    public function getMakeDefault($slug)
    {
        $units = Units::getAllUnits()->where('type', 'fields')->run();
        if (count($units)) {
            foreach ($units as $unit) {
                if ($unit->slug == $slug) {
                    $default = $unit->title;
                    $unit->setAttributes('default', 1);
                } else {
                    $unit->setAttributes('default', 0);
                }
                $unit->save();
            }
            return redirect()->back()->with('message', 'New Default Unit is ' . $default);
        }

        return redirect()->back();
    }
}



