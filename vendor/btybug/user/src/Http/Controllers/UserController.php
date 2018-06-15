<?php

namespace Btybug\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Btybug\User\Http\Requests\User\ChangePassword;
use Btybug\User\Http\Requests\User\EditUserRequest;
use Btybug\User\User;
use Datatables;
use Illuminate\Http\Request;
use Btybug\User\Http\Requests\User\CreateAdminRequest;
use Btybug\User\Http\Requests\User\DeleteAdminRequest;
use Btybug\User\Http\Requests\User\EditAdminRequest;
use Btybug\User\Repository\UserProfileRepository;
use Btybug\User\Repository\UserRepository;
use Btybug\User\Services\RoleService;
use Btybug\User\Services\UserService;
use View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * @return mixed
     */
    public function getIndex(
        UserService $userService
    )
    {
        $users = $userService->getSiteUsers()->paginate();
        return view('users::users.list', compact(['users', 'userService']));
    }

    /**
     * @return View
     */
    public function getAdmins(
        UserService $userService,
        RoleService $roleService
    )
    {
        $admins = $userService->getAdmins()->paginate();
        $roles = $roleService->getRolesList();

        foreach($admins as $item)
        {
            $item->role->name = $roles[$item->role_id];
        }
//        $admins = DB::table('users')->where('role_id', '!=', '0')->get()->toArray();
        return view('users::admins.list', compact(['admins', 'userService', '$roleRepository']));
    }

    /**
     * @return View
     */
    public function getCreateAdmin(
        RoleService $roleService
    )
    {
        $rolesList = $roleService->getRolesList();
        return view('users::admins.create', compact(['rolesList']));
    }

    public function postCreateAdmin(
        CreateAdminRequest $request,
        UserRepository $userRepository,
        UserProfileRepository $userProfileRepository
    )
    {
        $requestData = $request->except('_token', 'password_confirmation');
        //TODO remove membership from users table
        $requestData['membership_id'] = 0;
        $user = $userRepository->create($requestData);
        if ($user && $userProfileRepository->createProfile($user->id)) {
            return redirect('/admin/users/admins')->with('message', "Admin has been created successfully !!!");
        }

        return redirect()->back()->with('error', 'Admin not created,Please try again');
    }

    /**
     * @return View
     */
    public function getEditAdmin(
        Request $request,
        UserService $userService,
        RoleService $roleService
    )
    {
        $rolesList = $roleService->getRolesList();
        $admin = $userService->getAdmin($request->id);
        if (!$admin) abort(404);

        return view('users::admins.edit', compact(['admin', 'rolesList']));
    }

    public function postEditAdmin(
        UserService $userService,
        EditAdminRequest $request,
        UserRepository $userRepository
    )
    {
        $admin = $userService->getAdmin($request->id);
        if (!$admin) abort(404);

        $requestData = $request->except('_token', 'password_confirmation');

        if (empty($requestData['password'])) $requestData['password'] = $admin->password;

        $user = $userRepository->update($admin->id, $requestData);
        if ($user) {
            return redirect('/admin/users/admins')->with('message', "Admin updated Successfully !!!");
        }

        return redirect()->back()->with('error', 'Admin not created,Please try again');
    }

    public function postDeleteAdmin(
        DeleteAdminRequest $request,
        UserService $userService,
        UserRepository $userRepository
    )
    {
        $result = false;
        $user = $userService->getAdmin($request->slug);
        if ($user) {
            $result = $userRepository->delete($user->id) ? true : false;
        }
        return \Response::json(['success' => $result]);
    }

    /*Need to make it with new email sent*/
    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendPassword(
        Request $request,
        UserRepository $userRepository,
        UserService $userService
    )
    {
        $user = $userRepository->find($request->id);
        if ($user) {
            $userService->sendPassword($user);
            return redirect()->back()->with([
                'flash' => [
                    'message' => trans('New Password sent successfully.'),
                ]]);
        } else {
            return redirect()->back()->with([
                'flash' => [
                    'message' => trans('Not Found'),
                    'class' => 'alert-danger'
                ]
            ]);
        }
    }

    /**
     * @param Request $request
     * @return View
     */
    public function getCreate(Request $request)
    {
        $membership = DB::table('memberships')->select('id', 'name', 'slug')->get()->toArray();
        foreach($membership as $item)
        {
            $membership_array[$item->id] = $item->name;
        }
        return view('users::users.create', ['membership'=>$membership_array]);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function postCreate(Request $request)
    {
        $data = $request->all();

        $validator = \Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            "membership_id" => 'required'
        ]);

        if($validator->fails()) return redirect()->back()->with('errors', $validator->errors())->withInput();

        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'membership_id' => $data['membership_id'],
            'status' => 'active',
        ]);
        return redirect('/admin/users');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getEdit(
        UserRepository $userRepository,
        $id
    )
    {
        $user = $userRepository->findOrFail($id);

        return view('users::users.edit', compact(['user', 'id']));
    }

    public function getChangePassword(
        UserRepository $userRepository,
        $id
    )
    {
        $user = $userRepository->findOrFail($id);

        return view('users::users.password', compact(['user', 'id']));
    }

    public function postDelete(
        DeleteAdminRequest $request,
        UserService $userService
    )
    {
        $result = $userService->deleteUser($request->slug);
        return \Response::json(['success' => $result]);
    }

    public function getShow(
        Request $request,
        UserRepository $userRepository
    )
    {
        $user = $userRepository->find($request->id);
        if (!$user) {
            abort(404);
        }
        return view('users::users.show', compact('user'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|View
     */
    public function editAdmins($id, Request $request)
    {
        //TODO check this action or delete
        //get data for view
        $roles = Roles::all()->pluck('name', 'id');
        $user = User::find($id);
        if (!$user || !User::ranking($user, 'edit'))
            return redirect()->back();

        $user = $this->dhelper->formatCustomFld($user);
        /*THIS is system function for edit user quickly*/
        if ($request->ajax()) {
            $data = $request->except('extra');
            $metaData = [];

            $rules = array_merge($metaData, [
                'email' => 'required|email|max:255|unique:users,email,' . $user->id . ',id',
                'username' => 'required|max:255|unique:users,username,' . $user->id . ',id',
            ]);
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                $account = unserialize($user['meta_data']);
                $html = View::make('users::_partials.edit_profile', compact('roles', 'user', 'account'))
                    ->withErrors($validator->errors())
                    ->render();
                return \Response::json(['data' => $html, 'code' => 200, 'error' => true]);
            }

            $roleID = (isset($data['role'])) ? $data['role'] : null;
            $userMeta = $request->get('extra', null);
            //save data
            $user = $this->user->updateUser($id, $data, $roleID, $userMeta);
            $account = unserialize($user['user_meta']);
            $html = View::make('users::_partials.edit_profile', compact('roles', 'user', 'profileFields', 'account'))->render();
            return \Response::json(['data' => $html, 'code' => 200, 'error' => false]);
        }

        return view('users::admins.edit', compact('user', 'roles'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteMember(
        Request $request,
        UserRepository $userRepository,
        UserService $userService
    )
    {
        $user = $userRepository->find($request->id);
        if (!$user)
            return redirect()->back();

        if (!$userService->ranking($user))
            return redirect()->back();

        $userRepository->deleteUser($user->id);
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postResetPassword(
        Request $request,
        UserService $userService
    )
    {

        $email = $request->get('email');
        $response = $userService->resetPassword($email);
        return \Response::json($response);
    }

    public function getSettings(
        RoleService $roleService
    )
    {
        $user_id = null;
        $rolesList = $roleService->getRolesList();
        $types = [
            'input' => 'Input',
            'selectbox' => 'Selectbox',
            'checkbox' => 'Checkbox',
            'radio' => 'Radio',
            'textarea' => 'Textarea',
        ];
        return view('users::admins.settings', compact(['rolesList', 'user_id']));
    }

    public function postSettings(Request $request)
    {
        //TODO check this action or delete
        $data['units'] = $request->custom['units'];
        if (isset($request->customs['units']) && is_array($request->customs['units'])) {
            $data['units'] = array_merge($request->customs['units'], $data['units']);
        }
        $formSettings = FormSettings::where('form_id', $request->form_setting_id)->first();
        if ($formSettings) {
            if (count($data)) {
                $extraData = [];
                foreach ($data as $key => $field) {
                    if ($key != 'units' && !empty($field)) {
                        $slug = BBGenerateSlug($field['name']);
                        if ($slug && !isset($extraData[$slug])) {
                            $extraData[$slug] = [
                                'name' => $slug,
                                'type' => $field['type'],
                                'label' => ucfirst($field['name'])
                            ];
                            if (isset($field['values'])) {
                                $extraData[$slug]['values'] = $field['values'];
                            }
                        }
                    } else {
                        $extraData[$key] = $field;
                    }

                }

                $formSettings->additional_settings = $extraData;

            } else {
                $formSettings->additional_settings = NULL;
            }
            $formSettings->save();
            return redirect()->back()->with('message', 'Form Settings saved');
        }

        abort(404);
    }

    public function passwordChange(UserRepository $userRepository, ChangePassword $request)
    {
        $id = $request->id;
        $new_password = $request->new_pass;
        $userRepository->model()->changePassword($id, $new_password);

        return redirect()->back();
    }

    public function userDetailsChange(
        UserRepository $userRepository,
        EditUserRequest $request
    )
    {
        $data = $request->except('_token');
        $userRepository->update($request->get('id'), $data);
        return redirect()->back();
    }

}
