<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array(
            'module_name' => 'User',
            'module_page' => 'List',
            'users' => User::latest()->get(),
        );

        return view('admin/user/list', $data);
    }

    public function addUserInfo(Request $request)
    {
        return view('admin/user/add', array(
            'module_name' => 'User',
            'module_page' => 'Create'
        ));
    }

    public function saveUserInfo(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, array(
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'username' => 'required|unique:users,name',
            'email' => 'required|email',
            'birthday' => 'date',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($validator) {
            $create = User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'name' => $data['username'],
                'birthday' => $data['birthday'],
                'email' => $data['email'],
            ]);

            if ($create) {
                return $this->index();
            }
        }
    }

    public function updateUser($id)
    {
        $userInfo = User::find($id);

        if ($userInfo) {
            return view('admin/user/update', array(
                'module_name' => 'User',
                'module_page' => 'Update',
                'user' => $userInfo
            ));
        }
    }

    public function deleteUser($id)
    {
        $userId = User::findOrFail($id);
        $deleted = $userId->delete();

        return redirect()->route('getUserList');
    }
}
