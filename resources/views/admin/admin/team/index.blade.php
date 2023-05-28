@extends('admin.layouts.main')

@section('team')
    <div class="card mt-5">
        <div class="col-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination  p-2 justify-content-center">
                    <li class="page-item"><a class="page-link" href="#welcome"><i class="fa-solid fa-angle-left"></i></a></li>
                    <li class="page-item">
                        <a class="page-link " href="#welcome">
                            <input type="month" name="admin-month">
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link " href="#welcome"><i class="fa-solid fa-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Rasm</th>
                        <th scope="col" class="text-center">Ism Familya</th>
                        <th scope="col">Lavozim</th>
                        <th scope="col">About</th>
                        <th></th>
                        <th>
                            <a href="{{ route('team.create') }}" class="btn btn-danger">
                                Create
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <th>{{ $team->id }}</th>
                        <td>
                            <img src="{{ asset('storage/'.$team->img) }}" style="width: 100px; height: 100px;" alt="img">
                        </td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->lavozim }}</td>
                        <td>{{ $team->about }}</td>
                        <td>
                            <a href="{{ route('team.edit', ['team' => $team->id]) }}" class="btn btn-success">
                                Update
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('team.destroy', ['team' => $team->id]) }}" method="POST">
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
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination  p-5 justify-content-center">
                        <li class="page-item"><a class="page-link p-4" href="#welcome"><i
                                    class="fa-solid fa-angles-left"></i></a></li>
                        <li class="page-item"><a class="page-link p-4" href="#welcome">1</a></li>
                        <li class="page-item"><a class="page-link p-4" href="#welcome">2</a></li>
                        <li class="page-item"><a class="page-link p-4" href="#welcome">3</a></li>
                        <li class="page-item"><a class="page-link p-4" href="#welcome"><i
                                    class="fa-solid fa-angles-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
