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
use App\Models\User;

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

    private $menu_options = [
        'Select meal type',
        'Starter',
        'Soup',
        'Main',
        'Dessert'
    ];

    public function getResults(Request $request)
    {
        $where = [];
        if (!empty($request->municipality)) {
            $where[] = ['municipality', $request->municipality];
        }
        if (!empty($request->category)) {
            $where[] = ['category', $request->category];
        }
        if ($request->has('keyword')) {
            $where[] = ['name', 'like', '%' . $request->keyword . '%'];
        }
        //dd($where);

        $list = [];
        if (!empty($where)) {
            $restaurants = Restaurants::where($where)
                ->get()
                ->toArray();

            foreach ($restaurants as $restaurant) {
                $list[] = [
                    'id' => $restaurant['id'],
                    'latitude' => $restaurant['latitude'],
                    'longitude' => $restaurant['longitude'],
                    'title' => $restaurant['name'],
                    'location' => $restaurant['address'],
                    'description' => $restaurant['description'],
                    'category' => $restaurant['category'],
                    'rating' => Feedback::where('restaurant_id', '=', $restaurant['id'])->get()->avg('rating'),
                    'image-primary' => $this->getGalleryByRestaurant($restaurant['id']),
                ];
            }
        }
        //dd($restaurants);

       //dd($list);
        return $list;
    }

    public function index(Request $request)
    {
        $data = [
            'details' => $this->getDetails(),
            'getResults' => $this->getResults($request),
            'recentRatedItems' => $this->getRecentItems(),
            'categories' => $this->categories,
            'municities' => $this->municities,
            'recentUser' => $this->getRecentUser(),
        ];

        //dd($data);

        return view('home', $data);
    }

    public function getRecentUser()
    {
        $recentUser = User::select('id', 'name', 'firstname', 'email')
            ->latest()
            ->take(1)
            ->get()
            ->toArray();

        return $recentUser[0];
    }

    public function getRecentItems()
    {
        $recentRated = Feedback::with('restaurant')->select('id', 'restaurant_id', 'rating')
            ->latest()
            ->groupBy('restaurant_id')
            ->take(3)
            ->get()
            ->toArray();

        $recentRatedItems = [];
        foreach ($recentRated as $item) {
            $item['primary_photo'] = $this->getGalleryByRestaurant($item['restaurant_id']);
            $recentRatedItems[] =  $item;
        }

        //dd($recentRatedItems);

        return $recentRatedItems;
    }

    public function getDetails()
    {
        $restaurants = Restaurants::latest()->take(10)->get();
        $details = [];
        foreach ($restaurants as $restaurant) {
            $address = explode(',', $restaurant->address);
            $details[] = [
                'id' => $restaurant->id,
                'name' => title_case($restaurant->name),
                'category' => $restaurant->category,
                'location' => $address[0] . (empty($address[1]) ? '' : ',' . $address[1]),
                'rating' => Feedback::where('restaurant_id', '=', $restaurant->id)->get()->avg('rating'),
                'primary_photo' => $this->getGalleryByRestaurant($restaurant->id),
                'review' => Feedback::where('restaurant_id', '=', $restaurant->id)->get()->count(),
            ];
        }

        return $details;
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

        $data['menus'] = $this->getMenu($id);
        $data['galleries'] = Gallery::where('restaurant_id', '=', $id)
            ->get()
            ->pluck('path')
            ->toArray();

        $data['reviews'] = $this->getReviews($id);
        $data['count_review'] = \DB::table('feedbacks')->selectRaw('*, count(*) AS total_review')->groupBy('email')->get()->pluck('total_review', 'email')->toArray();

        $review_count = Feedback::where('restaurant_id', '=', $id)->get()->count();
        $review_avg = Feedback::where('restaurant_id', '=', $id)->get()->avg('rating');

        $restaurant = Restaurants::where('id', '=', $id)->get()->first();

        $address = explode(',', $restaurant->address);

        $data['details'] = [
            'id' => $restaurant->id,
            'name' => title_case($restaurant->name),
            'category' => $restaurant->category,
            'address' => $address[0] . ',' . $address[1],
            'rating' => $review_avg,
            'description' => $restaurant->description,
            'openinghours' => explode(';', $restaurant->bus_hours),
            'email' => $restaurant->email,
            'website' => $restaurant->website,
            'phone_number' => $restaurant->phone_number,
            'mobile_number' => $restaurant->mobile_number,
            'latitude' => $restaurant->latitude,
            'longitude' => $restaurant->longitude,
            'review_count' => $review_count,
        ];

       return view('details', $data);
    }

    public function getMenu($restaurantId)
    {
        $items = Menu::where('restaurant_id', '=', $restaurantId)
            ->get()
            ->toArray();

        $menu = [];
        foreach ($items as $item) {
            $menu[] = [
                'name' => title_case($item['name']),
                'description' => ucfirst($item['description']),
                'type' => $this->menu_options[$item['type']],
                'price' => $item['price'],
            ];
        }

        return $menu;
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
            'email' => 'required|email',
            'title' => 'required|max:100',
            'message' => 'required|max:1000',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($validator) {
            $create = Feedback::create([
                'title' => $data['title'],
                'message' => $data['message'],
                'name' => $data['name'],
                'restaurant_id' => $id,

                'email' => (\Auth::user() === true) ? \Auth::user()->email : $data['email'],

                'score_comfort' => $data['score_comfort'],
                'score_location' => $data['score_location'],
                'score_facilities' => $data['score_facilities'],
                'score_staff' => $data['score_staff'],
                'score_value' => $data['score_value'],

                'rating' => ($data['score_comfort'] + $data['score_location'] +
                             $data['score_facilities'] + $data['score_staff'] +
                             $data['score_value']) / 5
             ]);

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
