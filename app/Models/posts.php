<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable=["name","price","user_id","image"];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favorite()
    {
        return $this->hasMany(favorite::class, 'post_id');
    }
    public function order()
    {
        return $this->hasMany(order::class, 'post_id');
    }
}
