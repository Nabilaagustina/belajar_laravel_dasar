@extends('layout.main')

@section('title', 'Home')

@section('content')

    <div class="container">    
        <h1 class="my-3">Halaman @yield('title')</h1>
        {{-- {{Auth::user()}} --}}

        <h2 class="my-2">
            selamat datang {{ Auth::user()->name }}, anda adalah {{ Auth::user()->role->name }}
        </h2>
    </div>

@endsection