<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Entities\Category;
use Modules\Favourite\Entities\Favourite;
use Modules\Gallery\Entities\Gallery;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'count',
        'price',
        'image',
        'is_sale',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }


    public function favouriteable()
    {
        return $this->morphMany(Favourite::class , 'favouriteable');
    }

}
