<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Category extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Material::class, 'ID_category', 'id');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
