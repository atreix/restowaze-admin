<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Restaurants;

class MainController extends Controller
{
    public function index()
    {
        $data['categories'] = [
            'Asian',
            'Japanese',
            'Coffee',
            'Filipino',
            'American',
            'Mexican'
        ];

        $data['locations'] = [
            'Balanga City',
            'Abucay',
            'Mariveles',
            'Orani',
            'Bagac'
        ];

        return view('home', $data);
    }

    public function showDetails($id)
    {
        $findId = Restaurants::find($id);

        if (!$findId) {
            abort(404);
        }

        $data = Restaurants::where('id', $id)->get()->first();

        return view('details', $data);
    }

    public function createReview()
    {

        dd('ss');
    }
}
