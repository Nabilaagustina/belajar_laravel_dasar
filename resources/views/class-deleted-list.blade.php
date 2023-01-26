@extends('layout.main')

@section('title', 'Class deleted')

@section('content')

    <div class="container">
        <h1>Halaman @yield('title')</h1>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>

            @foreach ($class as $clas) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $clas->name }}</td>
                    <td>
                        <a href="/class-deleted/{{$clas->id}}/restore" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Restore</a>
                    </td>
                </tr>
                
                @endforeach
        </table>
        <a href="/class" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>

    </div>

@endsection