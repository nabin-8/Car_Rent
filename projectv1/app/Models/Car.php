<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function car_photos()
    {
        return $this->hasMany(CarPhoto::class);
    }
}
