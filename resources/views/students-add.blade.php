@extends('layout.main')

@section('title', 'Tamabah Student')

@section('content')

    <div class="container">    
        <h1>Halaman @yield('title')</h1>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="mt-5 col-6 m-auto">
            <form action="student" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="label-control">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="gender" class="label-control">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value=""></option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nis" class="label-control">Nis</label>
                    <input type="text" name="nis" id="nis" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="class_id" class="label-control">Class</label>
                    <select name="class_id" id="class_id" class="form-control">
                        <option value=""></option>
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