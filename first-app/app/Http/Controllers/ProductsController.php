<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller{
    protected $name = "USER";

    public function getAllProducts(){
        $products = Product::find(1);
        // dd($products);
    }

    public function getProducts(){
        echo $this->getAllProducts();
        return view('products',['name' => $this->name,'products'=>['0'=>'iPhone X','1'=>'iPhone XR','2'=>'iPhone XS','3'=>"iPhone SE"]]);
    }

    public function getProduct($id){
        return "product $id";
    }

    public function addProduct($id){
        return "product $id added!";
    }    
}

