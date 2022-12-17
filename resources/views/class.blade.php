@extends('layout.main')

@section('title', 'Student')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Student Name</th>
            </tr>
            @foreach ($class as $clas) 
                <tr>
                    <td>{{ $clas->id }}</td>
                    <td>{{ $clas->name }}</td>
                    {{-- <td>{{ $clas->student }}</td> --}}
                    <td>
                        <ol>
                            @foreach ($clas->student as $student)
                                <li>{{ $student->name }}</li>  
                            @endforeach
                        </ol>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection