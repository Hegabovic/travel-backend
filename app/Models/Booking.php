<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'product_id',
        'booked_on',
    ];

    /**
     * @return BelongsTo
     * @author Abdullah Hegab
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * @return BelongsTo
     * @author Abdullah Hegab
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
