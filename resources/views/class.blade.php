@extends('layout.main')

@section('title', 'Student')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nama</th>
            </tr>
            @foreach ($class as $clas) 
                <tr>
                    <td>{{ $clas->id }}</td>
                    <td>{{ $clas->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection