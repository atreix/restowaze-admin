<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'name', 'description', 'restaurant_id',
        'type', 'created_at', 'updated_at'
    ];
}
