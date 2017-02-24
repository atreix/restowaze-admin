<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use App\Models\Restaurants;
use App\Models\Gallery;

class GetDirectionController extends Controller
{

    public function getGalleryByRestaurant($id)
    {
        $result = '../assets/img/items/1.jpg';
        $gallery = Gallery::where('restaurant_id', '=', $id)
            ->get()
            ->pluck('path')
            ->toArray();

        if ($gallery) {
            $result = '../app/' . collect($gallery)->random();
        }

        return $result;
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

    public function postRestaurants($where = null)
    {
        if (!is_null($where)) {
            $restaurants = Restaurants::where($where)->get();
        } else {
            $restaurants = Restaurants::get();
        }

        $list = [];
        foreach ($restaurants as $restaurant) {
            $list[] = [
                'id' => $restaurant['id'],
                'latitude' => $restaurant['latitude'],
                'longitude' => $restaurant['longitude'],
                'title' => $restaurant['name'],
                'location' => $restaurant['address'],
                'marker_image' => $this->getGalleryByRestaurant($restaurant['id']),
            ];
        }

        return json_encode($list);

    }
}
