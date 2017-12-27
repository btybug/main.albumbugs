<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 27.12.2017
 * Time: 15:35
 */

namespace Btybug\Uploads\Http\Controllers;


use Btybug\btybug\Http\Controller;

class DatatablesController extends Controller
{
    public function getIndex()
    {
        return view('uploads::Datatables.index');
}
}