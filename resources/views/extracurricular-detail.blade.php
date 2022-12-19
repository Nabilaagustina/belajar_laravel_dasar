@extends('layout.main')

@section('title', 'Extracurricular detail')

@section('content')
    <div class="container">
        <h3>Detail halaman @yield('title')</h3>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Anggota</th>
            </tr>
            <tr>
                <td>{{$ekskul->name}}</td>
                <td>
                    <ol>
                        @foreach ($ekskul->students as $student)
                            <li>{{ $student->name }}</li>
                        @endforeach
                    </ol>
                </td>
            </tr>
        </table>
    </div>
@endsection