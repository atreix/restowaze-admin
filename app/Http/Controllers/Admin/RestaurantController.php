<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Restaurants;
use App\Models\Gallery;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;

class RestaurantController extends Controller
{
    private $categories = [
        'Fine Dining',
        'Fast food',
        'Bar & Grill',
        'Coffee shop'
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
        'Samal'
    ];

    private $menu_options = [
        'Select meal type',
        'Starter',
        'Soup',
        'Main',
        'Dessert'
    ];


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = array(
            'module_name' => 'Restaurant',
            'module_page' => 'List',
            'restaurants' => Restaurants::latest()->paginate(10),
            'categories' => $this->categories
        );

        return view('admin/restaurant/list', $data);
    }

    public function search(Request $request)
    {
        if ($request->has('search') && $request->has('table_search')) {
            $searchQuery = Restaurants::where('category', 'like', '%' . $request->get('table_search') . '%')->orWhere('name', 'like', '%' . $request->get('table_search') . '%')
                ->
            // ->orWhere('municipality', 'like', '%' . $request->get('table_search') . '%')
            latest()
                ->paginate(10);

            $data = array(
                'module_name' => 'Restaurant',
                'module_page' => 'List',
                'restaurants' => $searchQuery
            );

            return view('admin/restaurant/list', $data);
        }
    }

    public function addBasicInfo(Request $request)
    {
        return view('admin/restaurant/add', array(
            'module_name' => 'Restaurant',
            'module_page' => 'Create',
            'categories' => $this->categories,
            'municities' => $this->municities,
            'restoInfo' => $request->session()->get('restoInfo')
        ));
    }

    public function saveBasicInfo(Request $request)
    {
        $data = $request->all();
        //dd($data);

        $validator = Validator::make($data, array(
            'name' => 'required|max:60|unique:restaurants,name',
            'description' => 'required|max:500',
            'category' => 'required|max:500',
            'website' => 'required|url',
            'bus_hours' => 'required|max:255',
            'owner_name' => 'required|max:255',
            'date_established' => 'required|date',
            'phone_number' => 'required|digits:11',
            'mobile_number' => 'digits:11',
            'email' => 'required|email|unique:restaurants,email',
            'address' => 'required|max:255',
            'municity' => 'required|max:500'
        ));

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        if ($validator) {
            $create = Restaurants::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'category' => $data['category'],
                'website' => $data['website'],
                'bus_hours' => $data['bus_hours'],
                'owner' => $data['owner_name'],
                'date_established' => $data['date_established'],
                'phone_number' => $data['phone_number'],
                'mobile_number' => $data['mobile_number'],
                'email' => $data['email'],
                'address' => $data['address'],
                'municipality' => $data['municity'],
                'latitude' => $data['latitude'],
            	'longitude' => $data['longitude'],
           ]);

            if (! $create) {
                abort(403);
            }

            $request->session()->flash('alert-success', 'Restaurant was successfully added!');
            return redirect()->route('getRestoList');
        }
    }

    public function updateBasicInfo($id)
    {
        $restaurantInfo = Restaurants::find($id);

        if ($restaurantInfo) {

            $gallery = Restaurants::find($id)->gallery;
            //dd($gallery);

            $gallery_data = [];
            $ptr = 0;
            foreach ($gallery as $gall) {
                $gallery_data[$ptr]['path'] = $gall->path;
                $gallery_data[$ptr++]['name'] = $gall->name;
            }
            // dd($gallery_data);
            //
            $menu = Restaurants::find($id)->menu;

            $menu_data = [];
            $ptr = 0;
            foreach ($menu as $mn) {
                $menu_data[$ptr]['id'] = $mn->id;
                $menu_data[$ptr]['name'] = $mn->name;
                $menu_data[$ptr]['description'] = $mn->description;
                $menu_data[$ptr]['type'] = $mn->type;
                $menu_data[$ptr++]['price'] = $mn->price;
            }
            //dd($menu_data);

            return view('admin/restaurant/update', array(
                'module_name' => 'Restaurant',
                'module_page' => 'Update',
                'categories' => $this->categories,
                'municities' => $this->municities,
                'gallery' => $gallery_data,
                'menu' => $menu_data,
                'menu_options' => $this->menu_options,
                'restoInfo' => $restaurantInfo
            ));
        }
    }

    public function saveUpdateBasicInfo(Request $request, $id)
    {
        $data = $request->all();
        //dd($data);

        if ($request->has('submit')) {
            $restaurant = Restaurants::find($id);

            $restaurant->name = $request->name;
            $restaurant->description = $request->description;
            $restaurant->category = $request->category;
            $restaurant->website = $request->website;
            $restaurant->bus_hours = $request->bus_hours;
            $restaurant->owner = $request->owner_name;
            $restaurant->date_established = $request->date_established;
            $restaurant->phone_number = $request->phone_number;
            $restaurant->mobile_number = $request->mobile_number;
            $restaurant->email = $request->email;
            $restaurant->address = $request->address;
            $restaurant->municipality = $request->municity;
            $restaurant->latitude = $request->latitude;
            $restaurant->longitude = $request->longitude;

            $save = $restaurant->save();

            if (false == $save) {
                abort(403);
            }

            $request->session()->flash('alert-success', 'Restaurant was successfully updated!');
            return redirect()->route('getRestoList');
        }
    }

    public function deleteRestaurant($id)
    {
        $restoId = Restaurants::findOrFail($id);
        $deleted = $restoId->delete();

        return redirect()->route('getRestoList');
    }

    public function addMenu(Request $request)
    {
        $this->updateBasicInfo($request);
    }

    public function saveMenu(Request $request, $id)
    {
        $requests = $request->all();
        //dd($requests);

        $validator = Validator::make($requests, array(
            'name.*' => 'required|max:100',
            'description.*' => 'required|max:500',
            'type.*' => 'required',
            'price.*' => 'required|numeric'
        ));

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }

        unset($requests['_token']);
        // $requests['restaurant_id'] = 2; // todo: change restaurant_id
        //

        // dd($requests);

        if ($validator) {

            $menu = $this->merge_menu_items($requests['id'], $requests['name'], $requests['description'], $requests['type'], $requests['price']);
            //dd($menu);

            foreach ($menu as $item) {
                if (empty($item['id'])) {
                    $create = Menu::create([
                        'restaurant_id' => $id,
                        'name' => $item['name'],
                        'description' => $item['description'],
                        'type' => $item['type'],
                        'price' => $item['price']
                    ]);

                } else {

                    //$new_menu = Menu::firstOrNew(array('restaurant_id' => $item['id'], 'name' => $item['name']));
                    $new_menu = Menu::firstOrNew(array('id' => $item['id']));
                    $new_menu->restaurant_id = $id;
                    $new_menu->name = $item['name'];
                    $new_menu->description = $item['description'];
                    $new_menu->type = $item['type'];
                    $new_menu->price = $item['price'];

                    $new_menu->save();

                    //dd($new_menu);
                }
            }

            $request->session()->flash('alert-success', 'Menu was successfully updated!');
            return redirect()->back();
        }
    }

    public function merge_menu_items(array $ids, array $names, array $descs, array $types, array $prices)
    {
        $menu = [];

        foreach ($names as $key => $name) {
            $menu[] = [
                'name' => $name,
                'id' => $ids[$key],
                'description' => $descs[$key],
                'type' => $types[$key],
                'price' => $prices[$key]
            ];
        }

        return $menu;
    }
}
