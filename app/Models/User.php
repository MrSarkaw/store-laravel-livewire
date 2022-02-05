<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'location',
        'tell_number',
        'isAdmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function IsAdmin(){
        if($this->isAdmin==1){
            return true;
        }
        return false;
    }
    public function IsUser(){
        if($this->isAdmin==0){
            return true;
        }
        return false;
    }

    
    public function posts()
    {
        return $this->hasMany(posts::class, 'user_id');
    }
    public function favorite()
    {
        return $this->hasMany(favorite::class, 'user_id');
    }
    public function order()
    {
        return $this->hasMany(order::class, 'user_id');
    }

    public function setPasswordAttribute($value){
        $this->attributes["password"]=bcrypt($value);
    }
}
