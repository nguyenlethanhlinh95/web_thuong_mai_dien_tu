<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // list product
        $products = Product::all();
        return view('admin.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $formInput=$request->except('image');
        //validation
        $this->validate($request,[
            'pro_name'=>'required',
            'pro_code'=>'required',
            'pro_price'=>'required',
            'pro_info'=>'required',
            'spl_price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $imageName = str_random(4). "_" . $imageName;
            while(file_exists('assets/images/product/' . $imageName)){
                $imageName = str_random(4). "_" . $imageName;
            }
            // di chuyen file
            $image->move('assets/images/',$imageName);
            //luu file database
            $formInput['image']=$imageName;
        }

        Product::create($formInput);
        return redirect()->back();
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
        $product = Product::findOrFail($id);
        return view('admin.pages.product.show',compact('product'));
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
