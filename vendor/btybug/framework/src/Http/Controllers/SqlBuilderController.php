<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 19.03.2018
 * Time: 13:57
 */

namespace Btybug\Framework\Http\Controllers;


use Btybug\btybug\Http\Controller;
use Illuminate\Http\Request;

class SqlBuilderController extends Controller
{
    public function getIndex()
    {
        return view('framework::sql_builder.index');
    }

}