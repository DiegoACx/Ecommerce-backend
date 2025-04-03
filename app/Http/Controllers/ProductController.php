<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listProducts = Product::paginate(3);

        //dd($ListProducts);
        return view('products.index',compact('listProducts'));
    }


    public function create(){
        return view('products.create');
    }

    public function show($id){

        $product = Product::find($id);
        return view('products.show', ['product'=>$product]);
    }
}