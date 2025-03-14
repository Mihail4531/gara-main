<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory; // Указываем всегда
    protected $fillable = ['name', 'is_active', 'is_popular', "image", "description"];
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

}
