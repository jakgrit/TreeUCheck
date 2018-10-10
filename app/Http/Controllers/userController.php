<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class userController extends Controller
{
     public function index(Request $request){
        $name = $request['name'];
        $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return view('userindex',["data"=>$cursor->toArray(),"name"=>$name]);
   
   }


    public function del($id){
         	$collection = (new Mongo)->TreeUCheck->announce;
   			$cursor = $collection->deleteOne( array( 'name' => $id ) );
    		return redirect()->route('home');
        
    }

}
