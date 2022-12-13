@extends('layout.main')

@section('title', 'Student')

@section('content')
    <div class="container">    
        <h1>Halaman @yield('title')</h1>
        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class Id</th>
            </tr>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->class_id}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection