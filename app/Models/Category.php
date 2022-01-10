<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name','image',

    ];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'category_id', 'id');
    }
    public function imageUrl()
    {
        return '/image/category/'.$this->image;
    }
}
