<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'date_of_birth',
        'profile_photo',
        'state',
        'country',
        'gender',
        'role',
    ];
    

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isChef()
    {
        return $this->role === 'chef';
    }

    public function isCustomer()
    {
        return $this->role === 'customer';
    }
}
