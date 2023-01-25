@extends('layout.main')

@section('title', 'Home')

@section('content')

    <div class="container">    
        <h1>Halaman @yield('title')</h1>

        <table class="table">
            <tr>
                <th>Nama</th>
                <th>kelas</th>
            </tr>

            <tr>
                <td>{{ $name }}</td>
                <td>{{ $class }}</td>
            </tr>

        </table>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nilai</th>
            </tr>

            @foreach ($scores as $score)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $score }}</td>
            </tr>
            @endforeach
            
        </table>
    </div>

@endsection