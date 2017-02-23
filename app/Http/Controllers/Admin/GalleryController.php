<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Storage;

use App\Models\Restaurants;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveGallery(Request $request, $id)
    {           	
        	$restaurantId = Restaurants::find($id);

        	if ($restaurantId) {
        		// @todo: log to gallery table
        		foreach($request->file("gallery") as $file) {
        			
        			$path = $file->store('restaurants');
        			//restaurants/71636cd86de6a6ce492a1a53ef8dd4f3.jpeg
        			
        			 
        			$create = Gallery::create([
        					'restaurant_id' => $id,
        					'name' => $file->getClientOriginalName(),
        					'path' => $path
        			]);
        		}
        		
            return back();
        }

    }
}
