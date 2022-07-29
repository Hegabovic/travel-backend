<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'passport_num',
        'gender',
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
