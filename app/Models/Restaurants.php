<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date_established', 'owner',
        'phone_number', 'mobile_number', 'email',
        'address', 'website', 'created_at', 'updated_at'
    ];
}
