<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'user_id', 'service_id', 'checkIn', 'checkOut', 'total_cost', 'status',

    ];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id','id');
    } 

    public function service()
    {
       return $this->belongsTo(Service::class, 'service_id','id');
    }
    public function booking_details()
    {
        return $this->hasMany(Booking_Detail::class, 'booking_id', 'id');
    }
}
