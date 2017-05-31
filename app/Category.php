<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MainCategory;
use App\SubCategory;
use App\Product;

class Category extends Model
{
    public function mainCategory()
    {
      return $this->belongsTo('App\MainCategory');
    }
    public function subCategories(){
      return $this->hasMany('App\SubCategory');
    }
}
