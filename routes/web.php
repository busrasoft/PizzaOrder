<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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

Auth::routes();       

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pizzaSizes', 'PizzaSizeController');
Route::resource('pizzaOrders', 'PizzaOrderController');
Route::resource('pizzas', 'PizzaController');
// Route::get('pizzas', function(){
//     if(Gate::allows('pizzas', Auth::user()))
//     {
//         dd(Auth::user());
//         return view('pizzas');
//     }
//     else{ 
//         return view('You are not admin');
//     }
// });

// Route::get('pizzas', function () {

//     if (Gate::allows('pizzas', Auth::user())) {
//         return view('pizzas.index');
//     } else {
//         echo "You are logged in but you are not authorized to access this page..";
//     }
// });