<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking_Detail extends Model
{
    protected $table = 'booking_details';
    protected $fillable = [
        'room_id', 'booking_id', 'quantity',

    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
