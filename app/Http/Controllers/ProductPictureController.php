<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductPicture;
use App\ProductColor;
use Session;
use Auth;

class ProductPictureController extends Controller
{
    public function __construct(){
      $this->middleware('auth:seller');
    }
    public function store(Request $request){
        //
    }
}
