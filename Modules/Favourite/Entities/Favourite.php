<?php

namespace Modules\Favourite\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favourite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'favouriteable_type',
        'favouriteable_id'
    ];

    public function favouriteable()
    {
        return $this->morphTo();
    }

}
