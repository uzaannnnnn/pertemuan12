@extends('students.layout')

@section('content')
    @if ($message = Session::get('success'))
        <center>
            <div class="alert alert-success alert-dismissible fade show mt-1" style="width:50rem;" role="alert">
                <p style="text-align: left">{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </center>
    @endif
    <center>
        <div class="card mt-5" style="width: 50rem;">
            <div class="card-header">
                <h3 style="display:inline-block" class="float-start">Muhamad Fauzan 22110485</h3><a
                    href="{{ route('logout') }}" class="btn btn-danger float-end">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>
            </div>
            <div class="card-body text-center">
                <table class="table table-hover table-bordered">
                    <thead class="bg-info">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Kelas</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->kelas }}</td>
                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                                        <a class="btn btn-info" style="color:white;" onclick=show("{{ $student->id }}")>
                                            <i class="bi bi-eye "> </i>Show</a>

                                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                                            <i class="bi bi-pencil-square"> </i>Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash">
                                            </i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-start">
                    <a class="btn btn-success" href="{{ route('students.create') }}"><i class="bi bi-plus-lg"></i> Create
                        New
                        student</a>
                </div><br>
            </div>
        </div>
    </center>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Nama : <span id="nama"></span></p><br>
                    <p>Kelas : <span id="kelas"></span></p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
