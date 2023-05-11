<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getList = Product::all();
       return view('Admin/product_list',compact('getList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Category::whereNotNull('category_id')->get();

        return view('Admin/add_product',compact('list'));
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
            "parent_id" => "required",   
            "image" => "required",
            "price" => "required"        
        ]);

        $product = new Product();
        $product->category_id = $request->parent_id;
        $product->name = $request->name;
        $product->price = $request->price;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = date('dmy').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload'),$imageName);
            // $data[] = $filename ;
        }
        $product->image = $imageName;
        $product->save();

        return redirect("productlist")->with(
            "success",
            "Product added successfully"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        $product = Product::find($id);
        $list = Category::whereNotNull('category_id')->get();
        return view('Admin/edit_product',compact('list','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $request->validate([
            "name" =>  "required",
            "price" => "required",
        ]);

        $product= Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->parent_id;
        $product->price = $request->price;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = date('dmy').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload'),$imageName);
        }else{
            $imageName = $product->image;
        }
        $product->image = $imageName;
        $product->save(); 

        return redirect("productlist")->with(
            "success",
            "product updated successfully"
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $category = Product::find($id);
        $category->delete();
        return response()->json('success');
    }

    public function extraDetails(Request $request,$id)
    {
        $id= $request->id;
       
        $product = Product::where('id',$id)->with('ProductDetail')->first();
       
        // $category->delete();
        // dd($product);
       return view('Admin/extra-detail',compact('product','id'));
    }

    public function extraDetailsPost(Request $request,$id)
    {
        $id = $request->id;
        $request->validate([
            "title" => "required",
            "total_items" => "required",   
            "des" => "required",
                   
        ]);

        $data = array(
            "title" => $request->title,
            "total_items"=> $request->total_items,
            "description" => $request->des,
            "product_id" => $id
        );
        $product = ProductDetail::updateorCreate(
           ['product_id' => $id],
           $data
        );

        return redirect("productlist")->with(
            "success",
            "product updated successfully"
        );
       
    }

}
