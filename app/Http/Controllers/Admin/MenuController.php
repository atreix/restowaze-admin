<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Menu;
use App\Models\Restaurants;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addMenu($id)
    {
        $restaurantInfo = Restaurants::find($id);

        if ($restaurantInfo) {
            return view('admin/restaurant/update', array(
                'module_name' => 'Restaurant',
                'module_page' => 'Update',
                'restoInfo' => $restaurantInfo
            ));
        }
    }

    public function saveMenu(Request $request)
    {
        $data = $request->all();
        dd($data);
        $validator = Validator::make($data, array(
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'username' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'birthday' => 'date',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
}
