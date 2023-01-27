@extends('layout.main')

@section('title', 'Teacher deleted')

@section('content')

    <div class="container">

        <h1 class="my-2">Halaman @yield('title')</h1>
         
        <div class="d-flex justify-content-end my-4">
            <form class="d-flex" role="search" method="GET">
                <input class="form-control me-2" type="search" placeholder="Keyword" aria-label="Search" name="keyword">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </form>
        </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>

            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>
                        <a href="/teacher-deleted/{{$teacher->id}}/restore" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Restore</a>
                    </td>
                </tr>
                @endforeach
                
            </table>

            <div>
                {{ $teachers->withQueryString()->links() }}
            </div>

            <a href="/teacher" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>
        
        </div>
        
@endsection