<?php namespace Btybug\Uploads\Http\Controllers;

use App\Http\Controllers\Controller;
use Btybug\btybug\Models\Painter\Painter;
use Btybug\btybug\Models\Templates\Units;
use Btybug\btybug\Services\CmsItemUploader;
use Btybug\Resources\Models\Validation as validateUpl;
use Illuminate\Http\Request;
use Resources;
use View;


class UnitsNewController extends Controller
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
        //$this->unitTypes = $this->types = @json_decode(File::get(config('paths.unit_path') . 'configTypes.json'), 1)['types'];
    }

    // working
    public function getIndex(Request $request)
    {
        $units = Painter::all()->get();
        return view("uploads::gears-new.units.index", compact(['units', 'test']));
    }

    // working
    public function getFrontend(Request $request)
    {
        $units = Painter::all()->paginate(6, 5, 'bty-pagination-2');
        return view("uploads::gears-new.units.index", compact(['units', 'test']));
    }

    // working
    public function getUnitVariations($slug)
    {
        $unit = Painter::find($slug);
        if (!count($unit)) return redirect()->back();
        $variation = [];
        $variations = $unit->variations();
        return view('uploads::gears-new.units.variations', compact(['unit', 'variations', 'variation']));
    }

    // TODO: seems this function is not used with any functionality
    public function postUnitWithType(Request $request)
    {
        $main_type = $request->get('main_type');
        $general_type = $request->get('type', null);

        if ($general_type) {
            $ui_units = Units::all()->where('main_type', $main_type)->where('type', $general_type)->get();
        } else {
            $ui_units = Units::all()->where('type', $main_type)->get();
        }

        $html = View::make('resources::units._partials.list_cube', compact(['ui_units']))->render();

        return \Response::json(['html' => $html, 'error' => false]);
    }

    // TODO: we have no makeVariation function
    public function postUnitVariations(Request $request, $slug)
    {
        $ui = Painter::find($slug);
        if (!$ui) return redirect()->back();
        $ui->makeVariation($request->except('_token', 'ui_slug'))->save();

        return redirect()->back();
    }

    public function postUploadUnit(Request $request)
    {
        return $this->upload->run($request, 'frontend');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // TODO: we have no deleteVariation function
    public function postDeleteVariation(Request $request)
    {
        $result = false;
        if ($request->slug) {
            $result = Units::deleteVariation($request->slug);
        }
        return redirect()->back()->with("message", "Variation was deleted");
    }

    // TODO: we have no delete function
    public function postDelete(Request $request)
    {
        $slug = $request->get('slug');
        $unit = Painter::find($slug);
        if ($unit) {
            $deleted = $unit->delete();
            return \Response::json(['success' => $deleted, 'url' => url('/admin/uploads/gears/units')]);
        }
    }

    // TODO: we have no renderLivePreview function
    public function getSettings(Request $request)
    {
        if ($request->slug) {
            $view = Painter::renderLivePreview($request->slug, 'frontend');
            return $view ? $view : abort('404');
        } else {
            abort('404');
        }
    }

    // TODO: we have no findVariation function
    public function unitPreview($id)
    {
        $slug = explode('.', $id);
        $ui = Painter::find($slug[0]);
        $variation = Painter::findVariation($id);
        if (!$variation) return redirect()->back();

        $ifrem = [];
        $settings = (isset($variation->settings) && $variation->settings) ? $variation->settings : [];

        $ifrem['body'] = url('/admin/uploads/gears/settings-iframe', $id);
        $ifrem['settings'] = url('/admin/uploads/gears/settings-iframe', $id) . '/settings';

        return view('uploads::gears-new.preview', compact(['ui', 'id', 'ifrem', 'settings']));

    }

    // TODO: we have no renderSettings and renderLive functions
    public function unitPreviewIframe($id, $type = null)
    {
        $slug = explode('.', $id);
        $ui = Painter::find($slug[0]);
        $_this = $ui;
        $variation = Painter::findVariation($id);
//        if (!$variation) return redirect()->back();
        $settings = (isset($variation->settings) && $variation->settings) ? $variation->settings : [];
        $extra_data = 'some string';
        if ($ui->main_type == 'data_source') {
            $extra_data = BBGiveMe('array', 3);
        }
        $htmlBody = $ui->renderLive(['settings' => $settings, 'source' => $extra_data, 'cheked' => 1, 'field' => null]);
        $htmlSettings = $ui->renderSettings(compact('settings'));
        $settings_json = json_encode($settings, true);
        return view('uploads::gears-new.units._partials.unit_preview', compact(['htmlBody', 'htmlSettings', 'settings', 'settings_json', 'id', 'ui']));
    }

    // TODO: we have no saveSettings function
    public function postSettings(Request $request)
    {
        $output = Painter::saveSettings($request->id, $request->itemname, $request->except(['_token', 'itemname']), $request->save);

        return response()->json([
            'error' => $output ? false : true,
            'url' => $output ? url('/admin/uploads/gears/settings/' . $output['slug']) : false,
            'html' => $output ? $output['html'] : false
        ]);
    }

    public function getDefaultVariation($id)
    {
        $data = explode('.', $id);
        $unit = Painter::find($data[0]);

        if (!empty($data) && $unit) {
            foreach ($unit->variations() as $variation) {
                $variation->setAttributes('default', 0);
                $variation->save();
            }

            $variation = Painter::findVariation($id);
            $variation->setAttributes('default', 1);
            $variation->save();

            return redirect()->back()->with('message', 'New Default variation is ' . $variation->title);
        }

        return redirect()->back();
    }

    public function getMakeDefault($slug)
    {
        $units = Painter::all()->where('type', 'fields')->get();
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



