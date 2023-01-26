@extends('layout.main')

@section('title', 'Extracurricular deleted')

@section('content')
    <div class="container">
        <h1>Halaman @yield('title')</h1>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

            @foreach ($ekstra as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="/extracu-deleted/{{$item->id}}/restore" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Restore</a>
                    </td>
                </tr>
                @endforeach
        </table>

        <div>
            {{ $ekstra->links() }}
        </div>

        <a href="/extracurricular" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>
    </div>
    
@endsection