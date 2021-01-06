<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $guarded=[];

    public function location()
    {
        return $this->belongsTo(Location::class,'location_from','id');
    
    }
   
    public function locationto()
    {
        return $this->belongsTo(Location::class,'location_to','id');
    
    }
   
}
