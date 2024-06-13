<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    protected $casts = [
        'cart' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'ID_User', 'id');
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'ID_Cart', 'id');
    }

    public function orderDetail(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'ID_Order', 'id');
    }
}
