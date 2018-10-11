<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\sendMail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(new sendMail());
        return view('email');
    }
    public function email(request $request)
    {
        // dd($request);
        $name = $request->session()->get('name');
        // dd($name);
        return view('email',["name"=>$name]);
        // return view('email');
    }
}
