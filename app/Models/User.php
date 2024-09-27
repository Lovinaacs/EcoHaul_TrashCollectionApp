<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'age', 'gender', 'address', 'phone', 'email', 'password', 'points'];

    public function redeem()
    {
        return $this->hasMany(Redeem::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}

