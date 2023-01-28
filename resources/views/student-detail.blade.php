@extends('layout.main')

@section('title', 'Detail Student')

@section('content')
    <div class="container">  
        <h3 class="my-3">Halaman @yield('title') dari Siswa yang bernama {{ $student->name }}</h3>

        <div class="my-3 d-flex justify-content-center">
            @if (!$student->image)
                <img src="{{asset('images/Screenshot_20230123_105538.png')}}" alt="photo"
                width="200" height="200">
            @else
                <img src="{{asset('storage/photo/'.$student->image)}}" alt="photo"
                width="200" height="200">
            @endif
        </div>

        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Gender</th>
            </tr>

            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->nis }}</td>
                <td>
                    @if ($student->gender == 'P')
                        Perempuan
                    @else
                        Laki-laki
                    @endif
                </td>
            </tr>

        </table>
        <table class="table table-bordered">
            <tr>
                <th>Class</th>
                <th>Homeroom teacher</th>
            </tr>

            <tr>
                @if (!$student->class)
                    <td>
                        Data kelas tidak ditemukan
                    </td>
                @else
                    <td>{{ $student->class->name }}</td>
                @endif

                @if (!$student->class)
                    <td>
                        Data wali kelas tidak ditemukan
                    </td>
                    @else
                    @if (!$student->class->homeroomTeacher)
                        <td>
                            Data wali kelas tidak ditemukan
                        </td>   
                    @else     
                        <td>{{ $student->class->homeroomTeacher->name }}</td>
                    @endif
                @endif
            </tr>

        </table>
        <table class="table table-bordered">
            <tr>
                <th>Extracurriculars</th>
            </tr>

            <tr>
                @if (count($student->extracurriculars)<=0)
                    <td>Tidak mengikuti extracurriculars</td>
                @else
                    <td>
                        <ol>
                            @foreach ($student->extracurriculars as $extracurricular)
                                <li>{{ $extracurricular->name }}</li>
                            @endforeach
                        </ol>
                    </td>
                @endif
            </tr>
            
        </table>
    </div>
@endsection