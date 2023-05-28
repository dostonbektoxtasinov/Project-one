@extends('admin.layouts.main');

@section('about')

    <h1 class="text-center p-3">
        About 
    </h1>
    <table class="table table-striped table-dark container mt-5 ">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Our</th>
                <th scope="col">Number</th>
                <th></th>
                <th>
                    <a href="{{ route('about.create') }}" class="btn btn-danger">
                        Create
                    </a>
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <th>{{ $about->id }}</th>
                    <td>{{ $about->name }}</td>
                    <td>{{ $about->number }}</td>
                    <td>
                        <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="btn btn-success">
                            Update
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('about.destroy', ['about' => $about->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
