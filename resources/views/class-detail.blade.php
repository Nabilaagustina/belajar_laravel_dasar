@extends('layout.main')

@section('title', 'Class detail')

@section('content')

    <div class="container"> 
        <h3 class="my-3">Detail kelas dari kelas {{ $class->name }}</h3> 

        <div class="my-3">
            <div class="d-flex justify-content-center">
                @if (!$class->image)
                    <img src="{{asset('images/Screenshot_20230123_105538.png')}}" alt="photo" width="200" height="200">
                @else
                    <img src="{{asset('storage/photo/'.$class->image)}}" alt="photo" width="200" height="200">
                @endif
            </div>
        </div>

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
                    <td>Data wali kelas tidak ditemukan</td>
                @else
                    <td>{{ $class->homeroomTeacher->name }}</td>
                @endif

            </tr>

        </table>

    </div>
    
@endsection