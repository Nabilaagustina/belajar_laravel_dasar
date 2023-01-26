@extends('layout.main')

@section('title', 'Student Deleted')

@section('content')
    <div class="container">    
        <h1>Halaman @yield('title')</h1>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>

            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>
                         <a href="student/{{ $student->id }}/restore" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Restore</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <div>
            {{ $students->links() }}
        </div>

         <a href="students" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>
         
    </div>
@endsection