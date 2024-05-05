<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent_id',
        'image'

    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function catchild()
    {
        return $this->hasMany(Category::class , 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class , 'parent_id');
    }
}
