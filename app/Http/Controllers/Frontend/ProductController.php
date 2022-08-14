<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Product;

class ProductController extends Controller
{
    public function home(){
        return view("frontend/home");
    }
    public function addproduct(){
        return view("frontend/addproduct");
    }

    public function productstor(Request $rqst)
    {
        $product = new product();
        $product->pname = $rqst->pname;
        $product->pdes = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->ststus = $rqst->ststus;
        $product->save();
        return redirect()->route("showproduct");
    }
    public function showproduct(){
        $products = Product::all();
        return view("frontend/showproduct",compact("products"));
    }
    public function editproduct($productId){
        $product = product::find($productId);
        return view("frontend/editproduct",compact("product"));
    }
    public function update(Request $rqst,$id){
        $product = product::find($id);
        $product->pname = $rqst->pname;
        $product->pdes = $rqst->pdes;
        $product->cat = $rqst->cat;
        $product->scat = $rqst->scat;
        $product->price = $rqst->price;
        $product->ststus = $rqst->ststus;
        $product->update();
        return redirect()->route("showproduct");
    }
    public function delete($id){
        $product = product::find($id);
        
        $product->delete();
        return redirect()->route("showproduct");
    }

    public function ststus($id){
        $product = product::find($id);
        $product->ststus;
        if($product->ststus=1){
            $product->ststus=2; 
        }
        else{
            $product->ststus=1; 
        }
        $product->update();
        return redirect()->route("showproduct");
    }
}