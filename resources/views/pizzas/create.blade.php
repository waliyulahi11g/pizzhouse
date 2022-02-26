@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="" name="name">
        <label for="type">Choose Pizza Type</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volvano">Volvano</option>
        </select>
        <label for="base">Choose Base Type</label>
        <select name="base" id="base">
            <option value="chicken crust">Chicken Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="">Extra topping:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br />
            <input type="checkbox" name="toppings[]" value="peppers"> Pepper <br />
            <input type="checkbox" name="toppings[]" value="garlics"> Garlics <br />
            <input type="checkbox" name="toppings[]" value="olives"> Olives <br />
            <input type="checkbox" name="toppings[]" value="beef"> Beef <br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
                
                
            
