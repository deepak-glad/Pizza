@extends('layouts.app')

@section('content')
<div class="wraped create-pizza">
    <h1>create a new prizza</h1>
    <!-- <form action="/" method="Head"> -->
    <form method="post" action="{{route('pizza.index')}}">
    @csrf
        <label for="name">your name</label>
        <input type="text" id="name" name="name"/>
        <label for="type" >choose youre pizza</label>
        <select name="type" id="type">
            <option value="option">option</option>
            <option value="margita" >margita</option>
            <option value="hawaiian">hawaii</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="base" >choose base type</label>
        <select name="base" id="base">
            <option value="option">option</option>
            <option value="cheesebust">cheesebust</option>
            <option value="garlic ">garlic</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <fieldset>
            <label >Extra pepping</label>
            <input type="checkbox" name="peppings[]" value="mushroms">mushroms<br/>
            <input type="checkbox" name="peppings[]" value="garlic">garlic<br/>
            <input type="checkbox" name="peppings[]" value="gab">gab<br/>
            <input type="checkbox" name="peppings[]" value="papper">papper<br/>

        </fieldset>
       


       <input type="submit" value="order pizza">
        <!-- <button type="button" value="button">gjgjgh</button> -->
    </form>
</div>
@endsection