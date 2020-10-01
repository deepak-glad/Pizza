@extends('layouts.layout')
    
    @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <img src="/images/pizza.jpg" alt="pizza logo">
                    Pizza House<br />
                    The North's Best Pizzas
                </div>
                <p class="masg">{{session('masg')}}</p>
                <a href="/pizza/create" >pizza order</a>
            </div>
            <
        </div>
        @endsection
    