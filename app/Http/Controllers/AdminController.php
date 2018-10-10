<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class AdminController extends Controller
{
    public function index(Request $request){

        $name = $request['name'];
         $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return view('admin',["name"=>$name,"data"=>$cursor->toArray()]);
    }
}
