<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Entities\Product;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'product_id',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
//    public function galleries()
//    {
//        return $this->hasMany(Gallery::class);
//    }
}
