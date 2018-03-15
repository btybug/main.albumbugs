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
use Btybug\Uploads\Repository\VersionProfilesRepository;
use Btybug\Uploads\Services\VersionProfilesService;
use Illuminate\Http\Request;
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
        VersionProfilesRepository $versionsRepository,
        VersionProfilesService $versionsService
    )
    {
        $plugins = $versionsRepository->getBy('type','js');
        return view('uploads::profiles.js', compact(['plugins']));
    }

    public function getCss(
        VersionProfilesRepository $versionsRepository,
        VersionProfilesService $versionsService
    )
    {
        $plugins = $versionsRepository->getBy('type','css');
        return view('uploads::profiles.css', compact(['plugins']));
    }

    public function getJsCreate(
        VersionsRepository $versionsRepository,
        VersionsService $versionsService
    )
    {
        $model = null;
        $plugins = $versionsRepository->getJS();
        return view('uploads::profiles.create_js', compact(['plugins','model']));
    }

    public function postJsCreate (
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionProfilesService $profilesService
    )
    {
        $profile = $profilesRepository->create($request->except('_token') + ['user_id' => \Auth::id()]);
        $profilesService->generateJS($profile);

        return redirect()->route('uploads_assets_profiles_js');
    }

    public function postCssCreate (
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionProfilesService $profilesService
    )
    {
        $profile = $profilesRepository->create($request->except('_token') + ['user_id' => \Auth::id()]);
        $profilesService->generateCSS($profile);
        return redirect()->route('uploads_assets_profiles_css');
    }

    public function getCssCreate(
        VersionsRepository $versionsRepository,
        VersionsService $versionsService
    )
    {
        $model = null;
        $plugins = $versionsRepository->getCss();

        return view('uploads::profiles.create_css', compact(['plugins','model']));
    }

    public function getJsEdit(
        $id,
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionsRepository $versionsRepository
    )
    {
       $model = $profilesRepository->findOrFail($id);
        $plugins = $versionsRepository->getJS();

        return view('uploads::profiles.create_js', compact(['plugins','model']));
    }

    public function getCssEdit(
        $id,
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionsRepository $versionsRepository
    )
    {
        $model = $profilesRepository->findOrFail($id);
        $plugins = $versionsRepository->getCss();

        return view('uploads::profiles.create_css', compact(['plugins','model']));
    }

    public function postCssEdit(
        $id,
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionProfilesService $profilesService
    )
    {
        $model = $profilesRepository->findOrFail($id);
        $profilesService->removeFile($model->hint_path);
        $updated = $profilesRepository->update($id,$request->except('_token'));
        $profilesService->generateCSS($updated);

        return redirect()->route('uploads_assets_profiles_css');
    }

    public function postJsEdit(
        $id,
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionProfilesService $profilesService
    )
    {
        $model = $profilesRepository->findOrFail($id);
        $profilesService->removeFile($model->hint_path);
        $updated = $profilesRepository->update($id,$request->except('_token'));
        $profilesService->generateJS($updated);

        return redirect()->route('uploads_assets_profiles_js');
    }

    public function delete(
        Request $request,
        VersionProfilesRepository $profilesRepository,
        VersionProfilesService $profilesService
    )
    {
        $data = $profilesRepository->findOrFail($request->get('slug'));
        $profilesService->removeFile($data->hint_path);
        $profilesRepository->delete($request->get('slug'));
        return \Response::json(['success' => true, 'url' => url('/admin/uploads/profiles/'.$data->type)]);
    }
}

