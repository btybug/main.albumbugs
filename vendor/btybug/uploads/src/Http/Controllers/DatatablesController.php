<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 27.12.2017
 * Time: 15:35
 */

namespace Btybug\Uploads\Http\Controllers;


use Btybug\btybug\Http\Controller;
use DataTables;
use DB;

class DatatablesController extends Controller
{
    public function getIndex($table)
    {
        $columns = \Schema::getColumnListing($table);
        return view('uploads::Datatables.index',compact('table','columns'));
    }

    public function getShowColumns($table)
    {
//        $columns = \Schema::getColumnListing($table);
        $columns = \DB::select('SHOW COLUMNS FROM ' . $table);
        return view('uploads::Datatables.show_columns',compact('table','columns'));
    }

    public function getFrontendSettings($table)
    {
        $columns = \Schema::getColumnListing($table);
        return view('uploads::Datatables.frontend_settings',compact('table','columns'));
    }

    public function getData($table)
    {
        $query = DB::table($table);
        return DataTables::of($query)->toJson();
    }
}