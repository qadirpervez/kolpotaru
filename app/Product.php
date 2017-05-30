<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MainCategory;
use App\Seller;

class Product extends Model
{
    public function mainCategory(){
      return $this->belongsTo('App\MainCategory');
    }
    public function seller(){
      return $this->belongsTo('App\Seller');
    }
}
