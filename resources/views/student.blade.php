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
                <th>Class Name</th>
                <th>extracurricular</th>
                <th>Homeroom Teacher</th>
            </tr>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->class_id}}</td>
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
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection