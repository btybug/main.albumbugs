<?php

namespace Btybug\User\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialAccessController extends Controller
{

    public function getIndex()
    {
        return view('users::special_access.index', compact([]));
    }
}