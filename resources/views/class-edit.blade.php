@extends('layout.main')

@section('title', 'Edit Class')

@section('content')

    <div class="container">    
        <h1>Halaman @yield('title')</h1>

        <div class="mt-5 col-6 m-auto">
            <form action="/clas/{{$class->id}}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="name" class="label-control">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $class->name }}" required>
                </div>

                @if (!$class->homeroomTeacher)
                    <div class="mb-3">
                        <label for="teacher_id" class="label-control">Homeroom Teacher</label>
                        <select name="teacher_id" id="teacher_id" class="form-control" required>
                        @foreach ($teacher as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        </select>
                    </div>
                @else       
                    <div class="mb-3">
                        <label for="teacher_id" class="label-control">Homeroom Teacher</label>
                        <select name="teacher_id" id="teacher_id" class="form-control" required>
                        <option value="{{ $class->homeroomTeacher->id }}">{{ $class->homeroomTeacher->name }}</option>
                        @foreach ($teacherex as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        </select>
                    </div>
                @endif

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection