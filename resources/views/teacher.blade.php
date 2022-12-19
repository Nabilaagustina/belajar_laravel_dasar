@extends('layout.main')

@section('title', 'Teacher')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>
                        <a href="teacher/{{$teacher->id}}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection