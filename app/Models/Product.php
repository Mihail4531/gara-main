<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Указываем всегда
    protected $fillable = ['name', 'image', 'color', 'prise', 'weight', 'material', 'is_active', 'brand_id', 'is_popular', 'is_new', 'is_action', "description"];
public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

