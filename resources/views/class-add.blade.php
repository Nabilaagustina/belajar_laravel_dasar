@extends('layout.main')

@section('title', 'Tamabah Class')

@section('content')

    <div class="container">    
        <h1>Halaman @yield('title')</h1>
        <div class="mt-5 col-6 m-auto">
            <form action="clas" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="label-control">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="teacher_id" class="label-control">Homeroom Teacher</label>
                    <select name="teacher_id" id="teacher_id" class="form-control" required>
                        <option value=""></option>
                        @foreach ($teacher as $TeacherName)      
                            <option value="{{ $TeacherName->id }}">{{ $TeacherName->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection