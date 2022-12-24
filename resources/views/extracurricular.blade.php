@extends('layout.main')

@section('title', 'Extracurricular')

@section('content')
    <div class="container">
        <h1>Halaman @yield('title')</h1>
        <div class="d-flex justify-content-end my-3">
            <td>
                <a href="extracurricular-add" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah data</a>
            </td>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
                {{-- <th>Anggota</th> --}}
            </tr>
            @foreach ($ekskul as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    {{-- <td>
                        <ol>
                            @foreach ($item->students as $student)
                                <li>{{ $student->name }}</li>
                            @endforeach
                        </ol>
                    </td> --}}
                    <td>
                        <a href="extracurricular/{{$item->id}}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Detail</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection