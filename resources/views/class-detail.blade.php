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

                @if (count($class->student)<=0)
                    <td>Tidak ada data siswa dalam kelas</td>
                @else
                    <td>
                        <ol>
                            @foreach ($class->student as $studentName)
                                <li>{{ $studentName->name }}</li>   
                            @endforeach
                        </ol>
                    </td>   
                @endif

                @if (!$class->homeroomTeacher)
                    <td>ata wali kelas tidak ditemukan</td>
                @else
                    <td>{{ $class->homeroomTeacher->name }}</td>
                @endif

            </tr>

        </table>

    </div>
    
@endsection