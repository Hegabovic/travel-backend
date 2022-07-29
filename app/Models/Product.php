<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * @return HasMany
     * @author Abdullah Hegab
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

}
