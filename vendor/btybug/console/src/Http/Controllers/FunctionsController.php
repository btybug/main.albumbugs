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
}