<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            'users' => User::get(),
        );

        return view('admin/user/list', $data);
    }

    public function addUser(Request $request)
    {
        return view('admin/user/add', array(
            'module_name' => 'User',
            'module_page' => 'Create'
        ));
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

    public function validator(Request $request)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
}
