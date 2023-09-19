<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //With Comment Model (1:M)
    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    //With Review Model (1:M)
    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }

    //With ContactMessage Model (1:M)
    public function contacts() 
    {
        return $this->hasMany(ContactMessage::class);
    }

    //With Cart Model (1:M)
    public function carts() 
    {
        return $this->hasMany(Cart::class);
    }

    //With Order Model (1:M)
    public function orders() 
    {
        return $this->hasMany(Order::class);
    }
}