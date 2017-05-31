<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\SubCategory;

class ProductPicture extends Model
{
    public function Product(){
      return $this->belongsTo('App\Product');
    }
}
