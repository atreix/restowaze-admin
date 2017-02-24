<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\Restaurants;
use App\Models\Gallery;
use App\Models\Feedback;
use App\Models\Menu;

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

        $recentRatedItems = Feedback::select('id','restaurant_id')
            ->latest()
            ->groupBy('restaurant_id')
            ->take(3)
            ->get()
            ->toArray();

        $restaurants = Restaurants::latest()->take(10)->get();
        $details = [];
        foreach ($restaurants as $restaurant) {
            $address = explode(',', $restaurant->address);
            $details[] = [
                'id' => $restaurant->id,
                'name' => title_case($restaurant->name),
                'category' => $restaurant->category,
                'location' => $address[0] . (empty($address[1]) ? '' : ',' . $address[1]),
                'rating' => 6,
                'primary_photo' => $this->getGalleryByRestaurant($restaurant->id),
                'review' => Feedback::where('restaurant_id', '=', $restaurant->id)->get()->count(),
            ];
        }

        $data = [
            'details' => $details,
            'recentRatedItems' => $recentRatedItems,
            'categories' => $this->categories,
            'municities' => $this->municities,
        ];

        return view('home', $data);
    }

    public function getGalleryByRestaurant($id)
    {
        $result = '';
        $gallery = Gallery::where('restaurant_id', '=', $id)
            ->get()
            ->pluck('path')
            ->toArray();

        if ($gallery) {
            $result = collect($gallery)->random();
        }

        return $result;
    }

    public function showDetails($id)
    {
        $findId = Restaurants::find($id);

        if (!$findId) {
            abort(404);
        }

        $data['menus'] = Menu::where('restaurant_id', '=', $id)
            ->get()
            ->toArray();

        $data['galleries'] = Gallery::where('restaurant_id', '=', $id)
            ->get()
            ->pluck('path')
            ->toArray();

        $data['reviews'] = $this->getReviews($id);
        $data['count_review'] = \DB::table('feedbacks')->selectRaw('*, count(*) AS total_review')->groupBy('from')->get()->pluck('total_review', 'from')->toArray();
        $review = Feedback::where('restaurant_id', '=', $id)->get()->count();
        $restaurant = Restaurants::where('id', '=', $id)->get()->first();
        $address = explode(',', $restaurant->address);
        $data['details'] = [
            'id' => $restaurant->id,
            'name' => title_case($restaurant->name),
            'category' => $restaurant->category,
            'address' => $address[0] . ',' . $address[1],
            'rating' => 6,
            'description' => $restaurant->description,
            'openinghours' => explode(';', $restaurant->bus_hours),
            'email' => $restaurant->email,
            'website' => $restaurant->website,
            'phone_number' => $restaurant->phone_number,
            'mobile_number' => $restaurant->mobile_number,
            'latitude' => $restaurant->latitude,
            'longitude' => $restaurant->longitude,
            'review' => $review,
        ];
        
        return view('details', $data);
    }

    public function saveReview(Request $request, $id)
    {
        $find = Restaurants::find($id);
        if (!$find) {
            abort(403);
        }

        $data = $request->all();
        $validator = Validator::make($data, array(
            'name' => 'required|max:100',
            'message' => 'required|max:1000',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $totalRating = 4;

        if ($validator) {
            $create = Feedback::create([
                'subject' => $data['name'],
                'message' => $data['message'],
                'restaurant_id' => $id,
                'from' => (\Auth::user() === true) ? \Auth::user()->email : 'Guest',
                'rating' => $totalRating,
            ]);


            if (!$create) {
                abort(403);
            }

            return redirect()->back();
        }
    }

    public function getReviews($restaurant_id) {
        $reviews = Feedback::where('restaurant_id', '=', $restaurant_id)
            ->latest()
            ->get()
            ->toArray();

        return $reviews;
    }

}
