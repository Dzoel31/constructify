<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'ID_Material', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'ID_User', 'id');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
