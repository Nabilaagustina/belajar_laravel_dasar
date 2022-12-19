@extends('layout.main')

@section('title', 'Class')

@section('content')
    <div class="container">
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
                        <a href="class/{{$clas->id}}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection