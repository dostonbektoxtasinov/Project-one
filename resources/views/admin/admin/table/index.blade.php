@extends('admin.layouts.main')
@section('table')
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
                        <th scope="col">Ism</th>
                        <th scope="col">Familya</th>
                        <th scope="col">Lavozim</th>
                        <th scope="col">Stavka</th>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                        <th scope="col">6</th>
                        <th scope="col">7</th>
                        <th scope="col">8</th>
                        <th scope="col">9</th>
                        <th scope="col">10</th>
                        <th scope="col">11</th>
                        <th scope="col">12</th>
                        <th scope="col">13</th>
                        <th scope="col">14</th>
                        <th scope="col">15</th>
                        <th></th>
                        <th>
                            <a href="{{ route('table.create') }}" class="btn btn-danger">
                                Create
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tables as $table)
                    <tr>
                        <th>{{ $table->id }}</th>
                        <td>{{ $table->ism }}</td>
                        <td>{{ $table->familya }}</td>
                        <td>{{ $table->lavozim }}</td>
                        <td>{{ $table->stavka }}</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        
                        {{-- <td>{{ $table->sana1 }}</td>
                        <td>{{ $table->sana2 }}</td>
                        <td>{{ $table->sana3 }}</td>
                        <td>{{ $table->sana4 }}</td>
                        <td>{{ $table->sana5 }}</td>
                        <td>{{ $table->sana6 }}</td>
                        <td>{{ $table->sana7 }}</td>
                        <td>{{ $table->sana8 }}</td>
                        <td>{{ $table->sana9 }}</td>
                        <td>{{ $table->sana10 }}</td> --}}
                        <td>
                            <a href="{{ route('table.edit', ['table' => $table->id]) }}" class="btn btn-success">
                                Update
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('table.destroy', ['table' => $table->id]) }}" method="POST">
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
