<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Restaurants;

class GetDirectionController extends Controller
{
    public function index() {
        //$this->getDirection();
        $this->getPlaceId();
    }

    public function getLocationByRestaurant()
    {

    }

    public function getPlaceId($coordinates = array())
    {
        $getLocation = \GooglePlaces::textSearch('Balanga City, Bataan', [
            'location' => '14.6753824, 120.5316586',
            'type' => 'restaurant',
        ]);
        dd('aa',$getLocation);
        $coordinates = [
            'lat' => '',
            'lng' => '',
        ];
    }

    /**
     * get place id of the restaurant
     */
    public function getDirection($from = null, $to = null)
    {
        if (empty($from) && empty($to)) {
            $from = 'place_id:ChIJ685WIFYViEgRHlHvBbiD5nE';
            $to = 'place_id:ChIJA01I-8YVhkgRGJb0fW4UX7Y';
        }

        $direction = \GoogleMaps::load('directions')
            ->setParam([
                'origin' => $from,
                'destination' => $to
            ])
            ->get();

        dd(json_decode($direction));
    }

    public function postRestaurants(Request $request){
        $restaurants = Restaurants::get();

        $list = [];
        foreach ($restaurants as $restaurant) {
            $list[] = [
                'id' => $restaurant['id'],
                'latitude' => $restaurant['latitude'],
                'longitude' => $restaurant['longitude'],
                'title' => $restaurant['name'],
                'location' => $restaurant['address'],
                'marker_image' => '../assets/img/items/1.jpg',
            ];
        }

        return json_encode($list);

    }
}
