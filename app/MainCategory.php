<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seller;
use App\Product;

class MainCategory extends Model
{
    public function products(){
      return $this->hasMany('App\Product');
    }
    public function categories(){
      return $this->hasMany('App\Category');
    }
}
