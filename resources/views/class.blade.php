@extends('layout.main')

@section('title', 'Class')

@section('content')

    <div class="container">
        <h1>Halaman @yield('title')</h1>

        @if (Session::has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-end my-3">
            <td>
                <a href="class-add" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah data</a>
            </td>
        </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                {{-- <th>Student Name</th>
                <th>Homeroom Teacher</th> --}}
                <th>Action</th>
            </tr>
            @foreach ($class as $clas) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $clas->name }}</td>
                    {{-- <td>{{ $clas->student }}</td> --}}
                    {{-- <td>
                        <ol>
                            @foreach ($clas->student as $student)
                                <li>{{ $student->name }}</li>  
                            @endforeach
                        </ol>
                    </td> --}}
                    {{-- <td>
                        {{ $clas->homeroomTeacher->name }}
                    </td> --}}
                    <td>
                        <a href="class/{{$clas->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                        <a href="class-edit/{{$clas->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                        <a href="class-delete/{{$clas->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection