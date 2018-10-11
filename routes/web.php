<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use MongoDB\Client as Mongo;
use Illuminate\Http\Request;


Route::get('/', function (Request $request) { 
	//dd($request);
	$name = $request->session()->get('name');
	if($request->session()->get('status')=="0"){
		return redirect()->route('admin.dashboard',["name"=>$name]); 
	}elseif  ($request->session()->get('status')=="1"){
		return redirect()->route('user.index',["name"=>$name]); 
	}else{
		return redirect()->route('index'); 
	}
  
})->name('home');

/*
	sendMail
*/
Route::post('send','mailController@send');
Route::get('email','mailController@email')->name('email');

Route::get('/login','LoginController@index')->name('login.index');



Route::get('/check/{id}','checkController@index')->middleware('CheckAuth')->name('check');



Route::get('/register/{id}', 'RegisterController@index')->name('register');






Route::get('/welcome', 'homeController@index')->name('index');

Route::get('/about', 'homeController@about')->name('about');

Route::get('/getAuth', 'LoginController@test');


// Route::get('/addregister', function () {    return view('addregis');})->middleware('CheckAuth')->name('addregister');

Route::get('/addregister', 'addRegisController@index')->middleware('CheckAuth')->name('addregister');

Route::get('/logout', 'LoginController@logout')->name('logout');


// Route::get('/admin', function () {    return view('admin');})->middleware('CheckAuth')->name('admin.dashboard');

Route::get('/admin', 'AdminController@index')->middleware('CheckAuth')->name('admin.dashboard');

Route::get('/userindex', 'userController@index')->middleware('CheckAuth')->name('user.index');





Route::get('/regmember', 'regmemberController@index')->middleware('CheckAuth')->name('addmember');


//ลบ
Route::get('/userindex/{id}', 'userController@del')->middleware('CheckAuth')->name('delPP');

Route::get('/regmember/{id}', 'regmemberController@del')->middleware('CheckAuth')->name('delmember');

Route::get('/register/del/{id}', 'RegisterController@del')->middleware('CheckAuth')->name('delregister');
Route::get('/check/{name}/{sur}', 'checkController@del')->middleware('CheckAuth')->name('delcheck');
//ลบ


//แก้ไข
Route::get('/regmember/update/status/{id}/{value?}','regmemberController@updateType')->middleware('CheckAuth')->name('regmember.updateType');
//แก้ไข

//sent

Route::post('/regmember', 'LoginController@sent')->name('regMember');

Route::post('/addregis', 'addRegisController@sent')->name('addRegis');

/*
	updateRegis
*/
Route::get('/editregister/{id}', 'addRegisController@update')->middleware('CheckAuth')->name('editRegis');
Route::post('/editregister/{id}', 'addRegisController@editsend')->middleware('CheckAuth')->name('editsend');

Route::post('/register', 'RegisterController@sent')->name('regSent');


Route::post('/login', 'LoginController@auth')->name('login');

//sent


Route::get('/mongoDB', function () { 
   $collection = (new Mongo)->TreeUCheck->member;
   dd($collection->find()->toArray());
});
