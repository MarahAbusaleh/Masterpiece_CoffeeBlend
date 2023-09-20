<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    //With Category Model (M:1)
    public function category() 
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    //With Cart Model (1:M)
    public function cart() 
    {
        return $this->hasMany(Cart::class);
    }

    //With Review Model (1:M)
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    //With OrderItem Model (1:M)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }


}
