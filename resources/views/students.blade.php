@extends('layout.main')

@section('title', 'Student')

@section('content')
    <div class="container">    
        <h1>Halaman @yield('title')</h1>
        <div class="d-flex justify-content-end my-3">
            <td>
                <a href="students-add" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah data</a>
            </td>
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
                        <a href="student/{{$student->id}}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection