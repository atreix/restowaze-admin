<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Restaurants;

class RestaurantController extends Controller
{
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
        );

        return view('admin/restaurant/list', $data);
    }

    public function search(Request $request)
    {
        if ($request->has('search') && $request->has('table_search')) {
            $searchQuery = Restaurants::where('category', 'like', '%' . $request->get('table_search') . '%')
                ->orWhere('name', 'like', '%' . $request->get('table_search') . '%')
                //->orWhere('municipality', 'like', '%' . $request->get('table_search') . '%')
                ->latest()
                ->paginate(10);

            $data = array(
                'module_name' => 'Restaurant',
                'module_page' => 'List',
                'restaurants' => $searchQuery,
            );

            return view('admin/restaurant/list', $data);
        }
    }

    public function addBasicInfo(Request $request)
    {
        return view('admin/restaurant/add', array(
            'module_name' => 'Restaurant',
            'module_page' => 'Create',
            'restoInfo' => $request->session()->get('restoInfo')
        ));
    }

    public function saveBasicInfo(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, array(
            'name' => 'required|max:60',
            'website' => 'required|url',
            'owner_name' => 'required|max:255',
            'date_established' => 'required|date',
            'phone_number' => 'required|digits:11',
            'mobile_number' => 'digits:11',
            'address' => 'required|max:255',
        ));

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        if ($validator) {
            $create = Restaurants::create([
                'name' => $data['name'],
                'website' => $data['website'],
                'owner' => $data['owner_name'],
                'date_established' => $data['date_established'],
                'phone_number' => $data['phone_number'],
                'mobile_number' => $data['mobile_number'],
                'address' => $data['address'],
            ]);

            if ($create) {
                return $this->index();
            }
        }
    }

    public function updateBasicInfo($id)
    {
        $restaurantInfo = Restaurants::find($id);

        if ($restaurantInfo) {
            return view('admin/restaurant/update', array(
                'module_name' => 'Restaurant',
                'module_page' => 'Update',
                'restoInfo' => $restaurantInfo
            ));
        }
    }

    public function saveUpdateBasicInfo(Request $request, $id)
    {
        $input = $request->all();
        $update = Restaurants::where('id', $id)
            ->update([
                'name' => $input['name'],
                'website' => $input['website'],
                'owner' => $input['owner_name'],
                'date_established' => $input['date_established'],
                'mobile_number' => $input['mobile'],
                'phone_number' => $input['phone'],
                'address' => $input['address']
        ]);

        if ($update) {
            return $this->updateBasicInfo($id);
        }
    }

    public function deleteRestaurant($id)
    {
        $restoId = Restaurants::findOrFail($id);
        $deleted = $restoId->delete();

        return redirect()->route('getRestoList');
    }
}
