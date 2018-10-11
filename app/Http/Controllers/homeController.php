<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class homeController extends Controller
{
     public function index(){
        $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return view('welcome',["data"=>$cursor->toArray()]);
   
   }


   public function about(request $request){
    //    dd($request);
    $name = $request->session()->get('name');
    $collection = (new Mongo)->TreeUCheck->announce;
    $cursor = $collection->find();
    return view('about',["data"=>$cursor->toArray(),"name"=>$name]);
    // return view('about');

}


}
