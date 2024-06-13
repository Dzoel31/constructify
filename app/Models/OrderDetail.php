<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class, 'ID_Order', 'id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'ID_Material', 'id');
    }
}
