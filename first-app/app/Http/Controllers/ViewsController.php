<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ViewsController extends Controller{
    protected $name = "USER";

    public function getAbout(){
        return view('about',['name'=>$this->name]);
    }
    public function getContact(){
        return view('contact');
    }
    public function getProducts(){
        return view('products',['name' => $this->name,'products'=>['0'=>'iPhone X','1'=>'iPhone XR','2'=>'iPhone XS','3'=>"iPhone SE"]]);
    }
}

