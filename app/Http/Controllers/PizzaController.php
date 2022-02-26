<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    public function index(){
     
        $pizzas = Pizza::all();

        return view('pizzas.index', ['pizzas' => $pizzas, ]);
    }

    public function show($id){
        //use id varaible to query the db for a record 
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->completed = 0;
      
        $pizza->save();
        
       return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function update($id){
        $pizza = Pizza::find($id);
        $pizza->completed = 1;
        $pizza->save();

        return redirect('/pizzas');

    }

    // public function completed(){

    //         //return redirect('');
    // }
   
}
