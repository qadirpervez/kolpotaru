<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Color;
use App\Product;
use App\ProductColor;
use Session;
use Auth;
use Purifier;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth:seller');
    }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        $subCategories = SubCategory::all();
        return view('dashboard.seller.product.create')->withSubcategories($subCategories)->withColors($colors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validate the data
      $this->validate($request, [
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:products,slug',
          'selling_price' => 'required|integer',
          'min_sell_price' => 'required|integer',
          'quantity' => 'required|integer',
          'mini_category_id' => 'required|integer',
          'combo' => 'required',
          'max_delivery_time' => 'required|integer'
        ]);
        //save the data.
        $product = new Product;
        $product->title = $request->title;
        $product->description = Purifier::clean($request->description);
        $product->slug = $request->slug;
        $product->selling_price = $request->selling_price;
        $product->min_sell_price = $request->min_sell_price;
        $product->quantity = $request->quantity;
        $product->mini_category_id = $request->mini_category_id;
        $product->combo = $request->combo == 'true' ? 1 : 0;
        $product->max_delivery_time = $request->max_delivery_time;
        $product->seller_id = Auth::id();
        $product->save();
        foreach ($request->colors as $color) {
          $pc = new ProductColor;
          $pc->product_id = $product->id;
          $pc->color_id = $color;
          $pc->save();
        }
        //set session and redirect
        Session::flash('success', 'The Product is sucessfully listed');
        return redirect()->route('product.show', $product->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
