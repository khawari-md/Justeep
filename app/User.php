<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_nama', 'email', 'alamat', 'jenis_kel', 'tgl_lahir', 'rating',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @return bool
     */
    public function verified()
    {
        return $this->token === null;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @return void
     */
    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }
}
