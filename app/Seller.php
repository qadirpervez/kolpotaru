<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Seller extends Authenticatable
{
    use Notifiable;

    protected $guard = 'seller';

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SellerResetPasswordNotification($token));
    }
}
