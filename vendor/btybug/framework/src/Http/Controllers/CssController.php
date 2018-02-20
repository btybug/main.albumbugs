<?php
/**
 * Copyright (c) 2017. All rights Reserved BtyBug TEAM
 */

namespace Btybug\Framework\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Btybug\Framework\Repository\VersionsRepository;
use Btybug\Framework\Services\SettingsService;
use Btybug\btybug\Repositories\AdminsettingRepository;

/**
 * Class SystemController
 * @package App\Modules\Settings\Http\Controllers
 */
class CssController extends Controller
{
    public function getIndex(
        Request $request,
        $type = "buttons"
    )
    {
        $slug = $request->get('type',$type);
        return view('framework::css.list', compact(['slug']));
    }
    public function saveStyle(Request $request){
        $type = $request->type;
        $class_name = $request->class_name;
        $code = $request->code;
       // \File::append(base_path('public/dinamiccss/'.$type.'.css'), '.'.$class_name.'{'.$code.'}'); // :TODO this is original
        \File::append(base_path('public/dinamiccss/image.css'), '.'.$class_name.' {'.$code.'}'); // :TODO this should be removed
        return redirect()->back()->with("success","Style was saved successfuly");
    }
}
