<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class regmemberController extends Controller
{
     public function index(Request $request){
		 
			$name = $request->session()->get('name');
         	$collection = (new Mongo)->TreeUCheck->member;
   			$cursor = $collection->find();
    		return view('regmember',["data"=>$cursor->toArray(),"name"=>$name,]);
        
	}
	
	public function updateType($name,$value)
	{
		//dd($id);
		$collection = (new Mongo)->TreeUCheck->member;

		
   		$cursor = $collection->updateOne(
			[ 'username' => $name ],
			[ '$set' => [ 'status' => $value ]]
		);
		return redirect()->route('addmember');
	}

     public function del($id){
         	$collection = (new Mongo)->TreeUCheck->member;
   			$cursor = $collection->deleteOne( array( 'username' => $id ) );
    		return redirect()->route('addmember');
        
    }
}
