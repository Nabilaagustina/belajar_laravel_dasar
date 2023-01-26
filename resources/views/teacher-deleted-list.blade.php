@extends('layout.main')

@section('title', 'Teacher deleted')

@section('content')

    <div class="container">

        <h1>Halaman @yield('title')</h1>
        

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
                {{ $teachers->links() }}
            </div>

            <a href="/teacher" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>
        
        </div>
        
@endsection