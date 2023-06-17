@extends('students.layout')

@section('content')

    <div class="card" style="width:500px; margin:10px 10px 10px 370px;">
        <div class="card-header">
            Edit Student
        </div>
        <div class="card-body">
            <div class="row">
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kelas:</strong>
                            <input class="form-control" name="kelas" placeholder="Kelas" value="{{ $student->kelas }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <a class="btn btn-danger" href="{{ route('students.index') }}"><i class="bi bi-box-arrow-left">
                            </i>Back</a>
                        <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"> </i>Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
