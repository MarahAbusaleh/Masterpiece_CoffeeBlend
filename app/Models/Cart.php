<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    //With User Model (M:1)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    //With Product Model (M:1)
    public function products() 
    {
        return $this->belongsTo(Product::class);
    }

    //With Menu Model (M:1)
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
