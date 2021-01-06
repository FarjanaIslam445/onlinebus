<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable=[

        'booking_id',
        'seat_number',
        'price',
        
    ];
}
