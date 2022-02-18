<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $products = Product::all();
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = Category::all();
        return view('backend.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_percent = $request->discount_percent;
        $product->selling_price = $request->price-($request->discount_percent * $request->price)/100 ;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        //photo
        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('product-photo',$newName);
            $product->photo = "product-photo/$newName";
        }
        $product->save();
        toast('Your Product Has Been Saved','success');
        return redirect('/product');
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
    {    $products = Product::find($id);
        $categories = Category::all();
        return view('backend.products.edit',compact('products','categories'));
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
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_percent = $request->discount_percent;
        $product->selling_price = $request->price-($request->discount_percent * $request->price)/100 ;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        //photo
        if($request->hasFile('photo')){
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('product-photo',$newName);
            $product->photo = "product-photo/$newName";
        }
        $product->update();
        toast('Your Product Has Been Updated','success');
        return redirect('/product');
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
