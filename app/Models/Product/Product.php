<?php

namespace App\Models\Product;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'price',
        'owner_id',
        'details',
        'color',
        'image',
        'is_sale',
        'count',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
