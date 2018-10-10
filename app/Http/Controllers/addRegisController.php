<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class addRegisController extends Controller
{
  

public function sent(Request $request){
  $collection = (new Mongo)->TreeUCheck->announce;

    //dd($request['pic']);



    if($request['pic'] == null){
      $imageName = 'fake.jpg';
    }else{
      $image = $request->file('pic');
      $imageName = time().$image->getClientOriginalName();
      $image->move(public_path('../public/image_upload'),$imageName);
    }
    
  
  



  //dd($imageName);

  $doc = array(
    'name' => $request['name'],
    'detail' => $request['detail'],
    'datestrat' => $request['datestrat'],
    'datestop' => $request['datestop'],
    'time' => $request['time'],
    'timeend' => $request['timeend'],
    'station' => $request['station'],
    'contect' => $request['contect'],
    'regstrat' => $request['regstrat'],
    'regstop' => $request['regstop'],
    'count' => $request['count'],
    'pic' => $imageName
    //'pic' => ""


  );


 
    $collection->insertOne($doc);
    return redirect()->route('home');

  
  }

   public function index(Request $request){
    $name = $request->session()->get('name');
        $collection = (new Mongo)->TreeUCheck->announce;
        $cursor = $collection->find();
        return view('addregis',["data"=>$cursor->toArray(),"name"=>$name]);
   
   }


  

  


}
