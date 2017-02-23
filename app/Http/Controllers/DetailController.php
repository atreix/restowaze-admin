<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;

class DetailController extends Controller
{
    public function __construct()
    {

    }

    public function showDetails($id)
    {
        $data = Restaurants::where('id', $id)->get()->first();
        $data['menus'] = [
            'red velvet 1',
            'red velvet 2',
            'red velvet 3',
            'red velvet 4'
        ];
dd($data);

        return view('details', $data);
    }
}
