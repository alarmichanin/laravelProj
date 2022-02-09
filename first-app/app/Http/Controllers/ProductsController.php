<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller{
    public function getProduct($id){
        return "product $id";
    }
    public function addProduct($id){
        return "product $id added!";
    }
}

