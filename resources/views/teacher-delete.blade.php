@extends('layout.main')

@section('title', 'Class')

@section('content')

    <div class="container">
        <p class="mt-3">Apakah anda yakin akan menghapus data dari guru {{ $teacher->name }}</p>

        <div class="d-flex flex-direction-colums">

            <form action="/teacher-destroy/{{$teacher->id}}" method="POST">
                @method('delete')
                @csrf

                <button class="btn btn-danger mb-2 mx-2" tabindex="-1" role="button" aria-disabled="true">Delete</button>
            </form>

            <a href="/teacher" class="btn btn-secondary mb-2 mx-2" tabindex="-1" role="button" aria-disabled="true">Cancel</a>
        </div>
    </div>

@endsection