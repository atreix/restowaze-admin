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

        $getLocation = \GooglePlaces::textSearch('Balanga City, Bataan', [
            'location' => '14.6753824, 120.5316586',
            'type' => 'restaurant',
        ]);

        $data['details'] = [];
        $results = $getLocation['results'];
        foreach ($results as $key => $result) {
            $data['details'][] = [
                'id' => $key+1,
                'title' => $result['name'],
                'location' => $result['formatted_address'],
                'latitude' => $result['geometry']['location']['lat'],
                'longitude' => $result['geometry']['location']['lng'],
                'rating' => isset($result['rating']) ? $result['rating'] : '',
                'type' => $result['types'][0],
            ];

        }

        //dd($getLocation['results'], $data['details']);

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
