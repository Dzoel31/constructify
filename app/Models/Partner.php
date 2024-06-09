<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partner extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function products(): HasMany
    {
        return $this->hasMany(Material::class, 'ID_partner', 'id');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
