<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'category_id',
        'stock',
        'slug',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
