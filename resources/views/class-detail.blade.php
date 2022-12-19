@extends('layout.main')

@section('title', 'Class detail')

@section('content')
    <div class="container"> 
        <h3>Detail kelas dari kelas {{ $class->name }}</h3> 
        <table class="table table-bordered">
            <tr>
                <th>Nama Class</th>
                <th>Student Name</th>
                <th>Homeroom Teacher</th>
            </tr>
            <tr>
                <td>{{ $class->name }}</td>
                <td>
                    <ol>
                        @foreach ($class->student as $studentName)
                            <li>{{ $studentName->name }}</li>   
                        @endforeach
                    </ol>
                </td>
                <td>{{ $class->homeroomTeacher->name }}</td>
            </tr>
        </table>
    </div>
@endsection