<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\Category;
use App\SubCategory;
use Session;
use Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('auth:seller');
    }
    public function index()
    {
      $id = Auth::id();
      $subCategories = SubCategory::where('seller_id', $id)->get();
      return view('dashboard.seller.subCategory.index')->withSubcategories($subCategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      return view('dashboard.seller.subCategory.create')->withCategories($categories);
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
          'category' => 'required|max:255',
          'category_id' => 'required|integer'
        ]);
      //store in db
      $subCategory = new SubCategory;
      $subCategory->category = $request->category;
      $subCategory->category_id = $request->category_id;
      $subCategory->seller_id = Auth::id();
      $subCategory->save();

      // set session and redirect.
      Session::flash('success', 'The sub category "' . $subCategory->category . '" is sucessfully created');
      return redirect()->route('sub_category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
      $subCategory = SubCategory::find($id);
      $categories = Category::all();
      return view('dashboard.seller.subCategory.edit')->withSubcategory($subCategory)->withCategories($categories);
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
      //validate the data
      $this->validate($request, [
        'category' => 'required|max:255',
        'category_id' => 'required|integer'
      ]);
      //save the data
      $subCategory = SubCategory::find($id);
      $subCategory->category = $request->category;
      $subCategory->category_id = $request-> category_id;
      $subCategory->seller_id = Auth::id();
      $subCategory->save();
      //set flash and redirect
      Session::flash('success', 'The Sub Category "' . $subCategory->category . '" is sucessfully updated.');
      return redirect()->route('sub_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
