<?php
use App\Http\Controllers\CustomerContoroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('jupiter', function(){
//     return view('jupiter');
// });

// Route::view('/view','view');

// Route::any('any',function(){
//     return view('any');
// });

// Route::get('open_by/{id}',function($id){
//     return "this is Id number=>".$id;
// });

// // Redirect to some page

// Route::Redirect('any','jupiter');

// // Now Im creating new contoroller and using method called show

// Route::get('show','TestController@show');

// // This is practice

// Route::get('practice',function(){
//     return view('practice');
// });


// Route::get('open_by2/{id}',function($id2){
//     return "this is test 2".$id2;
// });

// Route::Redirect('practice2','any');


// Route::get('sanple',function()
// {
//     return view('sanple',['name'=>'Naoya']);
// });

// Route::get('sample2/{name}',function($name2){
//     return view('sample2',['im_writing_this'=>$name2]);
// });

Route::get('last','TestController@last');

Route::get('request2/{id}','TestController@request2');

Route::get('request3/{id}','TestController@request3');

Route::get('/open','TestController@show1');

Route::get('submit','TestController@save');

Route::get('bss','TestController@bs');

Route::get('bslogin','TestController@bslogin');



Route::get('bs',[
    'uses'=>'TestController@bsloginbt',
    'as'=>'login.index'
]);


Route::view('/','home');
Route::view('contact','contact');
Route::view('about','about');

// asは引き受け元、usersはその先




Route::post('customers1',[
    'uses' => 'CustomerContoroller@store',
    'as' => 'customers1'
    ]);

Route::get('customers',[
    'uses' =>'CustomerContoroller@index',
    'as' => 'customers'
]);

Route::get('customers/create',[
    'uses' =>'CustomerContoroller@create',
    'as' => 'customers/create'
]);

Route::get('customers/{customer}',[
    'uses'=>'CustomerContoroller@show',
    'as'=>'customers.show'
]);

Route::get('customers/{{$customer->id}}','CustomerContoroller@show');

Route::patch('customers1',[
    'uses' => 'CustomerContoroller@store',
    'as' => 'customers1'
    ]);


