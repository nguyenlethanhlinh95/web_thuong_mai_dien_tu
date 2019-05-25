<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function __construct() {
        return view('front.pages.home');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.pages.home');
    }

    public function shop()
    {
        $products = Product::all();
        return view('front.pages.shop', compact('products'));
    }

    public function product_details($id)
    {
        //$product = DB::table('products')->where('id',$id)->get();
        $product = Product::findOrFail($id);
        return view('front.pages.product_detail', compact('product'));
    }
}
