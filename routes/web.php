<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

/*C:\xampp\mysql\binmy
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#main page
Route::get('/', function () {
    return view('welcome');
});

#pizza view using PizzaController
Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index')->middleware('auth');

#pizza view using PizzaController
Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');

#pizza view using Pizzacontroller
Route::post('/pizza',[PizzaController::class,'store']);

#wildcards using PizzaController
Route::get('/pizza/{id}', [PizzaController::class, 'show'])->middleware('auth');

#delete using Pizzacontroller
Route::delete('/pizza/{id}',[PizzaController::class,'destroy'])->name('pizza.destroy')->middleware('auth');

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
