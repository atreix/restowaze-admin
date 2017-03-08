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
        'created_at', 'rating', 'from', 'email', 'name', 'title',
        'score_comfort', 'score_location', 'score_facilities',
        'score_staff', 'score_value'
    ];

    protected $dates = ['created_at'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurants::class, 'restaurant_id');
    }
}
