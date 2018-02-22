<?php

namespace Btybug\FrontSite\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Btybug\btybug\Repositories\HookRepository;


/**
 * Class HooksController
 * @package Btybug\FrontSite\Http\Controllers
 */
class HooksController extends Controller
{
    /**
     * @param HookRepository $hookRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(
        HookRepository $hookRepository
    )
    {
        $hooks = $hookRepository->getAll();

        return view('manage::frontend.hooks.index', compact(["hooks"]));
    }

    public function getEdit(
        $id,
        HookRepository $hookRepository
    )
    {
        $hook = $hookRepository->findOrFail($id);
        return view('manage::frontend.hooks.edit', compact(["hook"]));
    }
    public function saveEdit($id, HookRepository $hookRepository, Request $request)
    {
        $data = $request->except("_token");
        $update = $hookRepository->update($id,$data);
        return redirect()->route('frontsite_hooks_index');
    }
}