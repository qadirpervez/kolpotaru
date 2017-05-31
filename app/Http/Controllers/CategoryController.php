<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainCategory;
use App\Category;
use App\SubCategory;
use Session;
use Auth;

class CategoryController extends Controller
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
        $categories = Category::where('seller_id', $id)->get();
        return view('dashboard.seller.category.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainCategories = MainCategory::all();
        return view('dashboard.seller.category.create')->withMaincategories($mainCategories);
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
          'main_category_id' => 'required|integer'
        ]);
      //store in db
      $category = new Category;
      $category->category = $request->category;
      $category->main_category_id = $request->main_category_id;
      $category->seller_id = Auth::id();
      $category->save();

      // set session and redirect.
      Session::flash('success', 'The category "' . $category->category . '" is sucessfully created');
      return redirect()->route('category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //a view with all products of this category
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $maincategories = MainCategory::all();
        return view('dashboard.seller.category.edit')->withCategory($category)->withMaincategories($maincategories);
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
        'main_category_id' => 'required|integer'
      ]);
      //save the data
      $category = Category::find($id);
      $category->category = $request->category;
      $category->main_category_id = $request->main_category_id;
      $category->seller_id = Auth::id();
      $category->save();
      //set flash and redirect
      Session::flash('success', 'The Category "' . $category->category . '" is sucessfully updated.');
      return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
