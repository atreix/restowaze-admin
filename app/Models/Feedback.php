<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Feedback extends Authenticatable
{
	use Notifiable;

	protected $table = 'feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'subject', 'message', 'restaurant_id',
		'created_at', 'rating', 'from'
    ];

	protected $dates = ['created_at'];
}
