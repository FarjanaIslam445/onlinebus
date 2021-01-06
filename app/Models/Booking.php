<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=[

        'user_id',
        'price',
        'journey_date',
        'trip_id',
    ];

    public function details()
    {
        return $this->hasMany(BookingDetail::class);
    }
}
