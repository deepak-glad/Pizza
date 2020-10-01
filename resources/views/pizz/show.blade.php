@extends('layouts.app')
    @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1>Ordered by {{$pizza->name}}</h1>
                    <p style="text-align: center;">Type-{{$pizza->type}}</p>
                    <p style="text-align:center; color:brown; height:50px;" >Base-{{$pizza->base}}</p>
                    <p class="peppings" style="text-align: left; ">Extra Pepping</p>
                    <ul>
                    @foreach($pizza-> peppings as $pepping)
                    <li style="text-align: left;">{{$pepping}}</li>
                    @endforeach
                    </ul>
                    <form  method="POST" action="{{route('pizza.destroy',$pizza->id)}}">
                    @csrf
                    @method('delete')
                    <button>Complete Order</button>
                </form>
                    <a href="/pizza">Back to all pizza</a>
                </div>
            </div>
        </div>
        @endsection