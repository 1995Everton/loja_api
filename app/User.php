<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table = 'user';

    protected $perPage = 10;

    public static $rules = [
        'username' => 'required',
        'email' => 'required|email|unique:user',
        'password' => 'required',
        'name' => 'required'
    ];

    protected $fillable = [
        'username', 'email','manager','active','name','password'
    ];

    protected $hidden = [
        'password',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function getManagerAttribute($manager):bool
    {
        return $manager;
    }

    public function getActiveAttribute($active):bool
    {
        return $active;
    }

}
