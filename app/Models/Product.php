<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'type',
        'description',
        'capacity',
        'is_available',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

}
