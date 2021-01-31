<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $fillable=[

        'booking_id',
        'user_email',
        'seat_number',
        'price',
        'journey_date',
        'trip_id',
    ];
   
   
}
