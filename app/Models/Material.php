<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'ID_Category', 'id');
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class, 'ID_Partner', 'id');
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' . $search . '%');
    }

    public function scopeFilter($query, $filter)
    {
        return $query->where('ID_category', $filter);
    }
}
