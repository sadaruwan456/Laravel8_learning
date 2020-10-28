<?php

use App\Http\Controllers\LogingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


/*
Simple URL mapping using routs
when you type a url /login and you want to go to login view simply u can map that login view to /login url
using this routes
*/

// Route::get('/loging', function(){
//     return view('loging');
// });

/*
If your route only needs to return a view, you may use the Route::view method(/welcome)
A first argument in this route is a url and second argument is a name of the view(loging).
*/

Route::view('/welcome', 'loging', ['name' => 'Taylor']);

/*if you need to capture a some value through route you must pass the value like this*/

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

//with out call numbers
//routes like a below, you can validate id(this url can't enter numbers or symble)
Route::get('/users/{name?}',function($name=null){
    return "Hi user " . $name;
})->where('name','[a-zA-Z]+');

//only symble add

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


//middleware ex-:
Route::get('/ages', ['middleware'=>'ageCheck', function(){

}]);


// map to controller
Route::get('/logings',[LogingController::class,'indexloging']);
