<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'name', 'description', 'price', 'quantity',

    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'service_id', 'id');
    }
    
}
