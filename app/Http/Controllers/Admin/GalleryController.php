<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

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
            Request::file('gallery')->store('restaurants');

            return back();
        }

    }
}
