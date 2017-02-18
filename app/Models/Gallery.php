<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Authenticatable
{
	use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name', 'path', 'restaurant_id',
		'created_at', 'updated_at', 'deleted_at'
    ];

	protected $dates = ['deleted_at'];
}
