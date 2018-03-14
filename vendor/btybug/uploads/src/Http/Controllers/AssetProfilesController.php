<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace Btybug\Uploads\Http\Controllers;

use App\Http\Controllers\Controller;
use Btybug\btybug\Helpers\helpers;
use Btybug\Uploads\Repository\VersionsRepository;
use Btybug\Uploads\Services\VersionsService;

/**
 * Class ModulesController
 * @package Btybug\Modules\Http\Controllers
 */
class AssetProfilesController extends Controller
{
    /**
     * @var helpers
     */
    public $helper;
    /**
     * ModulesController constructor.
     * @param Module $module
     * @param Upload $upload
     * @param validateUpl $v
     */
    public function __construct()
    {
        $this->helper = new helpers();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        return view('uploads::profiles.index');
    }

    public function getJs(
        VersionsRepository $versionsRepository,
        VersionsService $versionsService
    )
    {
        $plugins = $versionsRepository->getJS();
        $jquery = $versionsService->getJqueryVersions();

        return view('uploads::profiles.js', compact(['plugins','jquery']));
    }

    public function getCss(
        VersionsRepository $versionsRepository
    )
    {
        $plugins = $versionsRepository->getCss();
        return view('uploads::profiles.css', compact(['plugins']));
    }

    public function getJsCreate(
        VersionsRepository $versionsRepository,
        VersionsService $versionsService
    )
    {
        $plugins = $versionsRepository->getJS();
        return view('uploads::profiles.create_js', compact(['plugins']));
    }

    public function getCssCreate(
        VersionsRepository $versionsRepository,
        VersionsService $versionsService
    )
    {
        $plugins = $versionsRepository->getCss();

        return view('uploads::profiles.create_css', compact(['plugins']));
    }
}

