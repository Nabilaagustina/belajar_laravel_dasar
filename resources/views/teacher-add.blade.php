@extends('layout.main')

@section('title', 'Tambah Teacher')

@section('content')
    <div class="container">    
        <h1>Halaman @yield('title')</h1>
        <div class="mt-5 col-6 m-auto">
            <form action="teach" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="label-control">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection