<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Redirect;
use App\Models\User;

class SignInController extends Controller
{
    const USER = 2; // 1 = Admin; 2 = Customer (registered from main site)

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        return view('sign-in');
    }

    public function doSignin(Request $request)
    {
        $data = $request->all();
        if (\Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'type' => self::USER])) {
            return redirect('/');
        } else {
            abort(403);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function saveregister(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, array(
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($validator) {
            $create = User::create([
                'firstname' => $data['first_name'],
                'lastname' => $data['last_name'],
                'password' => bcrypt($data['password']),
                'email' => $data['email'],
                'registeredIP' => $request->ip(),
                'type' => self::USER, // 1 = Admin; 2 = Customer (registered from main site)
            ]);

            if (!$create) {
                abort(403);
            }

            return redirect('/');
        }
    }
}
