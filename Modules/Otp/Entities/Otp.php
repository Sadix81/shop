<?php

namespace Modules\Otp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = [
        'otpable_id',
        'otpable_type',
        'code',
        ];

    public function otptable()
    {
        return $this->morphTo();
    }
}
