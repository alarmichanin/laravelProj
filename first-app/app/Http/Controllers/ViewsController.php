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
}

