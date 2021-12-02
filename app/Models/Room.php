<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'category_id', 'branch', 'people', 'floor',
         'number_room', 'view_account', 'description', 'image',
          'total_money', 'actual_total', 'payment_method', 'rating', 'status',

    ];

    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function booking_details()
    {
        return $this->hasMany(Booking_Detail::class, 'room_id', 'id');
    }
}
