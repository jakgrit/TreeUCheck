<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class LoginController extends Controller



{
  public function auth(Request $request){

    //dd($request);

   $collection = (new Mongo)->TreeUCheck->member;
    //dd($collection);

   $Query = array(
    'username' => $request['user'],
    'password' => $request['Pass'],
  );





   $cursor = $collection->findOne($Query);
  //  dd($cursor);
   if($cursor["status"]=="0"){
    $request->session()->put('user', $request['user']);
    $request->session()->put('status', $cursor["status"]);
    $request->session()->put('name', $cursor["name"]);
    $name = $cursor["name"];
    return redirect()->route('admin.dashboard',["name"=>$name]);
  }elseif($cursor["status"]=="1"){
    $request->session()->put('user', $request['user']);
    $request->session()->put('status', $cursor["status"]);
    $request->session()->put('name', $cursor["name"]);
    $name = $cursor["name"];
    return redirect()->route('user.index',["name"=>$name]);
  }else{
    return redirect()->route('index');
  }
   //var_dump($cursor);
   // exit();
   // dd($cursor);
   // dd($cursor->toArray());
   // foreach ($cursor->toArray() as $doc) {
   //  dd($doc["name"]);
   // }




}
public function test(Request $request){
  dd($request->session()->all());
}

public function logout(Request $request){
  $request->session()->flush();   
  return redirect()->route('index'); 
}


public function sent(Request $request){
  $collection = (new Mongo)->TreeUCheck->member;


  $doc = array(
    'username' => $request['user'],
    'password' => $request['pass'],
    'name' => $request['name'],
    'surname' => $request['sur'],
    'email' => $request['email'],
    'status' => $request['cars'],

  );

  if( $request['pass'] == $request['conpass']){
    $collection->insertOne( $doc );
    return redirect()->route('addmember');
  }else{
    return redirect()->route('addmember');
  }

  



}



}
