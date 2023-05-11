<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getList = Category::where('status',1)->get ();
      return view('Admin/categoery',compact('getList'));
    }

    /**  
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $list = Category::whereNull('category_id')->get();
     return view('Admin/create_category',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            // "parent_id" => "required",           
        ]);

        $data = array(
          'name' => $request->name,
          'category_id' => $request->parent_id
        );

        Category::create($data);
        
        return redirect("categories")->with(
            "success",
            "Category added successfully"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $category = Category::find($id);
        $list = Category::whereNotNull('category_id')->get();
        return view('Admin/edit_category',compact('list','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $request->validate([
            "name" => "required",
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->category_id = $request->parent_id;
        $category->save();

        return redirect("categories")->with(
            "success",
            "category updated successfully"
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        return response()->json('success');

    }
}
