<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    //With User Model (M:1)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    //With Product Model (M:1)
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    //With Menu Model (M:1)
    public function menu() 
    {
        return $this->belongsTo(Menu::class);
    }

    //With Order Model (M:1)
    public function order() 
    {
        return $this->belongsTo(Order::class);
    }
}
