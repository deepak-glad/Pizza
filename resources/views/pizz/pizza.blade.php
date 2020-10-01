@extends('layouts.app')
    @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza list
                </div>
               @foreach($pizza as $pizzas)
               <div>
               {{$pizzas->name}},{{$pizzas->type}},{{$pizzas->base}}
               </div>
               @endforeach
            </div>
            <a href="{{route('pizza.create')}}" >ORDER PIZZA</a>
        </div>
        @endsection