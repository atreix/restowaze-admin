<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Restaurants;

class MainController extends Controller
{
    private $categories = [
            'Fine Dining',
            'Fast food',
            'Bar & Grill',
            'Coffee shop',
    ];

    private $municities = [
            'Abucay',
            'Bagac',
            'Balanga',
            'Dinalupihan',
            'Hermosa',
            'Limay',
            'Mariveles',
            'Morong',
            'Orani',
            'Orion',
            'Pilar',
            'Samal',
    ];

    public function index()
    {
        $restaurants = Restaurants::latest()->take(10)->get();

        $details = [];
        foreach ($restaurants as $restaurant) {
            $address = explode(',', $restaurant->address);
            $details[] = [
                'id' => $restaurant->id,
                'name' => title_case($restaurant->name),
                'category' => $restaurant->category,
                'location' => $address[0] . ',' . $address[1],
                'rating' => 6,
                //'review' => $restaurant->review,
            ];
        }

        $data = [
            'details' => $details,
            'categories' => $this->categories,
            'municities' => $this->municities,
        ];

        return view('home', $data);
    }

    public function showDetails($id)
    {
        $findId = Restaurants::find($id);

        if (!$findId) {
            abort(404);
        }

        $restaurant = Restaurants::where('id', '=', $id)->get()->first();

        $address = explode(',', $restaurant->address);
        $details = [
            'id' => $restaurant->id,
            'name' => title_case($restaurant->name),
            'category' => $restaurant->category,
            'address' => $address[0] . ',' . $address[1],
            'rating' => 6,
            'description' => $restaurant->description,
            'openinghours' => $restaurant->bus_hours,
            'email' => $restaurant->email,
            'website' => $restaurant->website,
            'phone_number' => $restaurant->phone_number,
            'mobile_number' => $restaurant->mobile_number,
            'latitude' => $restaurant->latitude,
            'longitude' => $restaurant->longitude,
            //'review' => $restaurant->review,
        ];

        return view('details', $details);
    }

}
