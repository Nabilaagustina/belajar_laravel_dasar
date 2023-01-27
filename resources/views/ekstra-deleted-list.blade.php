@extends('layout.main')

@section('title', 'Extracurricular deleted')

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
            {{ $ekstra->withQueryString()->links() }}
        </div>

        <a href="/extracurricular" class="btn btn-secondary mb-2" tabindex="-1" role="button" aria-disabled="true">Back</a>
    </div>
    
@endsection