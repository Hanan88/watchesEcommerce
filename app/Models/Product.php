<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function product_color(){
        return $this->hasMany('App\Models\ProductColor');
    }
    public function cart(){
        return $this->hasMany('App\Models\Cart');
    }
    public function order(){
        return $this->hasMany('App\Models\Order');
    }
    public function favorite(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function feedback(){
        return $this->hasMany('App\Models\Feedback');
    }

}
