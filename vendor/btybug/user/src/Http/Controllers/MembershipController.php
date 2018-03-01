<?php

namespace Btybug\User\Http\Controllers;


use App\Http\Controllers\Controller;
use Btybug\User\Repository\MembershipRepository;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    private $membershipRepository;

    public function __construct(MembershipRepository $membershipRepository)
    {
        $this->membershipRepository = $membershipRepository;
    }

    public function getIndex()
    {
        $memberships = $this->membershipRepository->getAll();
        return view('users::membership.index', compact(['memberships']));
    }

    public function getCreate()
    {
        return view('users::membership.create');
    }

    public function postCreate(Request $request)
    {
        $data = $request->except('_token');
        $rules = array_merge([
            'name' => 'required|max:100',
            'slug' => 'required|max:255|unique:memberships,slug',
        ]);
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) return redirect()->back()->with('errors', $validator->errors());

        $this->membershipRepository->create($data);
        return redirect()->route('user_membership_index')->with('message', 'Membership has been created successfully');
    }

    public function getEdit(Request $request,$id)
    {
        $membership = $this->membershipRepository->findOrFail($id);

        return view('users::membership.edit', compact('membership'));
    }

    public function postEdit(Request $request,$id)
    {
        $membership = $this->membershipRepository->findOrFail($id);

        $data = $request->except('_token');
        $rules = array_merge([
            'name' => 'required|max:100',
            'slug' => 'required|max:255|unique:memberships,slug,' . $membership->id . ",id",
        ]);
        $validator = \Validator::make($data, $rules);
        if ($validator->fails()) return redirect()->back()->with('errors', $validator->errors());

        $membership->update($data);
        return redirect()->route('user_membership_index')->with('message', 'Membership has been updated successfully');
    }

    public function postDelete(Request $request)
    {
        $result = false;
        if ($request->slug) {
            $result = $this->membershipRepository->deleteByCondition('id',$request->slug);
        }
        return \Response::json(['success' => $result]);
    }

    public function getPermissions($slug)
    {
        $role = Roles::where('slug', $slug)->first();

        if (!$role) abort(404);

        $dataFront = FrontendPage::where('parent_id', NULL)->groupBy("module_id")->get();

        return view("users::membership.permissions", compact(['role', 'dataFront', 'slug']));
    }

    public function postPermissions(Request $request)
    {
        $data = $request->except('_token');

        $page = FrontendPage::find($data['pageID']);
        $newMembership = Roles::find($data['roleID']);
        $membershipString = FrontendPage::getRolesByPage($page->id, false);

        if ($data['isChecked'] == 'yes') {
            $membershipString[] = $newMembership->slug;
        } else {
            if (($key = array_search($newMembership->slug, $membershipString)) !== false) {
                unset($membershipString[$key]);
            }
        }

        if (count($membershipString)) {
            $memberships = implode(',', $membershipString);
        } else {
            $memberships = null;
        }
        PermissionRole::optimizePageRoles($page, $memberships, 'front');
        $dataFront = FrontendPage::where('parent_id', Null)->groupBy("module_id")->get();
        $role = Roles::where('slug', $request->role_slug)->first();
        $html = view('users::membership._partials.perm_list', compact(['role', 'dataFront']))->render();

        return \Response::json(['error' => false, 'html' => $html]);
    }
}