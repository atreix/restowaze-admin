<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurants extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date_established', 'owner', 'description',
        'phone_number', 'mobile_number', 'email',
        'address', 'category', 'website', 'created_at', 'updated_at', 'deleted_at', 
    	'municipality', 'bus_hours'
    ];

    protected $dates = ['deleted_at'];
    
    
    public function gallery() {
    	return $this->hasMany(Gallery::class, 'restaurant_id');
    }
    
}
