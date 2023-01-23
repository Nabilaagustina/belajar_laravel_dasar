@extends('layout.main')

@section('title', 'Teacher')

@section('content')
    <div class="container">
        <h1>Halaman @yield('title')</h1>
        <div class="d-flex justify-content-end my-3">
            <td>
                <a href="teacher-add" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah data</a>
            </td>
        </div>
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
                        <a href="teacher/{{$teacher->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                        <a href="teacher-edit/{{$teacher->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                        <a href="teacher-delete/{{$teacher->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection