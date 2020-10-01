<?php

namespace App\Http\Controllers;

use App\Models\Pizzas;
use App\Models\Pizzas as ModelsPizzas;
use Illuminate\Http\Request;
//use App\Pizzas;

class PizzaController extends Controller
{
    public function index(){

      // $pizza=Pizzas::all();
      // $pizza=Pizzas::orderby('name','desc')->get();
    //  $pizza=Pizzas::where('name','dk')->get();
    $pizza=Pizzas::latest()->get();

    return view('pizz.pizza', ['pizza'=>$pizza]);
    }

    public function show($id){
      $pizza=Pizzas::find($id);

    return view('pizz.show',['pizza'=>$pizza]);
  }
  public function create(){
    return view('pizz.create');
  }
  public function store(){
    $pizzas=new Pizzas();

    $pizzas->name=request('name');
    $pizzas->type=request('type');
    $pizzas->base=request('base');
    $pizzas->peppings=request('peppings');


    $pizzas->save();
    //error_log('$pizzas');
    //error_log(request('peppings'));
   //return request('peppings');
    
     return redirect('/')->with('masg','thanks for your order');
  }
  public function destroy($id){
    $pizza= Pizzas::findOrFail($id);
    $pizza->delete();
    return redirect('/pizza');

  }
}