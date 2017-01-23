<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\User;

class RestaurantController extends Controller
{
    protected $lastStep = 3;
    protected $step = 1;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('restaurant/list');
    }

    public function getInfoStep(Request $request)
    {
        return view('restaurant/add', [
            'restoInfo' => $request->session()->get('restoInfo')
        ]);
    }

    public function postInfoStep(Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required|min:3',
            'owner-name' => 'required|max:20',
            'website' => 'required|url',
            'category' => 'required'
        ]);

        $request->session()->get('restoInfo')
            ->update($request->all());

        if ($this->step === $this->lastStep) {
            return redirect()->action('RestaurantController@getInfoDone');
        }

        return redirect()->action('RestaurantController@getInfoStep', [
            'step' => $this->step + 1
        ]);
    }

    public function getInfoDone()
    {
        return '<h1> Successful! </h1>';
    }
}
