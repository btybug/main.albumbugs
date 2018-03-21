<?php

namespace Btybug\Console\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{

    public function getIndex()
    {
        return view('console::functions.index');
    }


    public function getCreate()
    {
        return view('console::functions.create');
    }

    public function postCreate (Request $request)
    {
        dd($request->all());
    }

    public function postOptions(Request $request)
    {
        $table = $request->get('table_name');
        $slug = $request->get('slug');

        $html = \View('console::functions._partials.options',compact('table','slug'))->render();

        return \Response::json(['error' => false,'html' => $html]);
    }

    public function postInside(Request $request)
    {
        $table = $request->get('table_name');
        $slug = $request->get('slug');

        $html = \View('console::functions._partials.inside',compact('table','slug'))->render();

        return \Response::json(['error' => false,'html' => $html]);
    }

    public function postSpecific (Request $request)
    {
        $table = $request->get('table_name');
        $columns = BBGetTableColumn($table);
        $show_name = 'id';
        if(isset($columns['name'])){
            $show_name = 'name';
        }elseif (isset($columns['title'])){
            $show_name = 'title';
        }elseif (isset($columns['slug'])){
            $show_name = 'slug';
        }elseif (isset($columns['username'])){
            $show_name = 'username';
        }

        $data = \DB::table($table)->select($table.'.*',
            \DB::raw("CONCAT($table.id,'-',$table.$show_name) AS show_name")
        )->pluck('show_name','id');
        $data = array_filter( $data->toArray());
        $html = \View('console::functions._partials.specific',compact('data'))->render();

        return \Response::json(['error' => false,'html' => $html]);
    }
}