<?php

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Modules\Otp\Entities\Otp;
use Modules\Profile\Entities\Profile;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Admin extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'username',
        'mobile'
    ];

    public function otps()
    {
        return $this->morphMany(Otp::class , 'otpable');
    }

    public function profile()
    {
        return $this->morphMany(Profile::class,'profileable');
    }
}
