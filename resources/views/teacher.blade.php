@extends('layout.main')

@section('title', 'Student')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nama</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection