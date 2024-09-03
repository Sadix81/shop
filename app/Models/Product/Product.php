<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'status',
        'price',
        'details',
        'color',
        'image',
        'is_sale',
        'discount',
        'count',
        'category_id',
    ];
}
