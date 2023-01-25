@extends('layout.main')

@section('title', 'Edit Student')

@section('content')

    <div class="container mt-3">
        {{-- {{$student}} --}}
        <p>Apakah anda yakin akan menghapus data dari : {{ $student-> name }} ({{ $student->nis }})</p>
        <div class="d-flex flex-direction-columns">
            <form action="/student-destroy/{{$student->id}}" method="POST" class="mx-2">
                @csrf
                @method('delete')

                <button type="submit" class="btn btn-danger mb-2" tabindex="-1" role="button" aria-disabled="true">Delete</button>
            </form>
            
            <a href="/students" class="btn btn-secondary mb-2 mx-2" tabindex="-1" role="button" aria-disabled="true">Cancel</a>
        </div>
    </div>

@endsection