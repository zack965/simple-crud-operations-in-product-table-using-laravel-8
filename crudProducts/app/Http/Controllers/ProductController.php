<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductStore;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('Products.Index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        //
        /*
         'Product_Name'=>'bail|required',
            'Product_Desc'=>'required'
        */
        //$this->validate();
        $product = new product;
        $product->Product_Name = $request->input('Product_Name');
        $product->Product_Desc = $request->input('Product_Desc');
        //$product->user_id = auth()->user()->id;
        //$product->cover_image = $fileNameToStore;
        $product->save();
        $request->session()->flash('status','prodecu has been created succesfully');
        return redirect('/product')->with('success', 'Post Created');
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
        $productf = Product::find($id);
        return view('Products.show')->with('productf',$productf);
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
        $productf = Product::find($id);
        return view('Products.edit')->with('productf',$productf);
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
        $this->validate($request, [
            'Product_Name' => 'required',
            'Product_Desc' => 'required'
        ]);
        $product = Product::find($id);
        $product->Product_Name =$request->input(('Product_Name'));
        $product->Product_Desc =$request->input(('Product_Desc'));
        $product->save();
        return redirect('/product')->with('success','Product updated');
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
        $product = Product::find($id);


        $product->delete();
        return redirect('/product')->with('success', 'Post Removed');
    }
}
