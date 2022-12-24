@extends('layout.main')

@section('title', 'Tamabah Student')

@section('content')
    <div class="container">    
        <h1>Halaman @yield('title')</h1>
        <div class="mt-5 col-6 m-auto">
            <form action="student" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="label-control">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="label-control">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                       <option value="L">L</option>
                       <option value="P">P</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nis" class="label-control">Nis</label>
                    <input type="text" name="nis" id="nis" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="class_id" class="label-control">Gender</label>
                    <select name="class_id" id="class_id" class="form-control" required>
                        @foreach ($class as $ClassName)      
                            <option value="{{ $ClassName->id }}">{{ $ClassName->name }}</option>
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