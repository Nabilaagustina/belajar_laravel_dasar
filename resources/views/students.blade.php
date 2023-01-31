@extends('layout.main')

@section('title', 'Student')

@section('content')

    <div class="container">    
        <h1>Halaman @yield('title')</h1>

        @if (Session::has('status'))
            {{-- <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div> --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-end my-3">
            <td>

                @if (!(Auth::user()->role_id != 1 && Auth::user()->role_id != 2) ) 
                    <a href="students-add" class="btn btn-primary mx-2" tabindex="-1" role="button" aria-disabled="true">Tambah data</a>
                @endif

                @if (Auth::user()->role_id == 1 ) 
                    <a href="student-deleted" class="btn btn-primary mx-2" tabindex="-1" role="button" aria-disabled="true">Show deleted data</a>
                @endif
            </td>
        </div>

        <div class="d-flex justify-content-end">
            <form class="d-flex" role="search" method="GET">
                <input class="form-control me-2" type="search" placeholder="Keyword" aria-label="Search" name="keyword">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </form>
        </div>
        
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                {{-- <th>Class Id</th>
                <th>Class Name</th>
                <th>extracurricular</th>
                <th>Homeroom Teacher</th> --}}
                <th>Action</th>
            </tr>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                    {{-- <td>{{ $student->class_id}}</td>
                    <td>{{ $student->class->name }}</td>
                    <td>
                        <ol>
                            @foreach ($student->extracurriculars as $extracurricular)
                                <li>{{ $extracurricular->name }}</li>  
                            @endforeach
                        </ol>
                    </td>
                    <td>
                        {{ $student->class->homeroomTeacher->name }}
                    </td> --}}
                    <td>

                        @if (!(Auth::user()->role_id != 1 && Auth::user()->role_id != 2) ) 
                            <a href="student-edit/{{$student->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                            <a href="student/{{$student->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                        @endif
                        
                        @if (Auth::user()->role_id == 1)
                            <a href="student-delete/{{$student->id}}" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Delete</a>  
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </table>
        
        <div>
            {{ $studentList->withQueryString()->links() }}
        </div>

    </div>
@endsection