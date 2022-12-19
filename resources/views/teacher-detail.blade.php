@extends('layout.main')

@section('title', 'Teacher')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Class</th>
                <th>Student</th>
            </tr>   
            <tr>
                <td>{{ $teacher->name }}</td>
                @if ( $teacher->class )
                    <td>
                        {{ $teacher->class->name }} 
                    </td>
                    <td>
                        <ol>
                            @foreach ($teacher->class->student as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </ol>
                    </td>
                @else
                    <td>Tidak menjadi wali kelas</td>
                    <td>Tidak ada Student</td>
                @endif
            </tr>
        </table>
    </div>
@endsection