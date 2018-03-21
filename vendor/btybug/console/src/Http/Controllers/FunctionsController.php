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
}