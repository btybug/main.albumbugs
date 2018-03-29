<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 29.03.2018
 * Time: 16:54
 */

namespace Btybug\Console\Http\Controllers\API;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OauthClientProductsController extends Controller
{
    public function onOff(Request $request)
    {
        return response()->json($request->all());
    }
}