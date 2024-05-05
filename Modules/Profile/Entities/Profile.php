<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'lastname',
        'mobile',
        'image',
        'birthday',
    ];

    public function profileable()
    {
        return $this->morphTo();
    }
}
