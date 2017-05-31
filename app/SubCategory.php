<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MainCategory;
use App\Category;
use App\Product;

class SubCategory extends Model
{
    public function Category(){
      return $this->belongsTo('App\Category');
    }
}
