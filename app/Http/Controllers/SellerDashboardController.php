<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerDashboardController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:seller');
    }
    public function index()
    {
      echo "Logged in";
    }
}
