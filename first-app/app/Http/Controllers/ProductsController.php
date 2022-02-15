<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;







use Illuminate\Support\Facades\DB;





class ProductsController extends Controller{
    protected $name = "USER";

    public function getAllProducts(){
        // try {
        //     DB::select('select * from places where visited = ?', [1]);	
        // } catch (\Exception $e) {
        //     die("Could not connect to the database.  Please check your configuration. error:" . $e );
        // }
        $products = Product::all();
        return $products;
    }

    public function getProducts(){
        $products = $this->getAllProducts();
        return view('products',['name' => $this->name,'products'=>$products]);
    }

    public function getProduct($id){
        return "product $id";
    }

    public function addProduct($id){
        return "product $id added!";
    }    
}

