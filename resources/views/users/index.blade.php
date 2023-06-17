@extends('students.layout')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" style="width:500px; margin:10px 10px 10px 370px;"
            role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
    @endif
    @if ($message = Session::get('errors'))
        <div class="alert alert-danger alert-dismissible fade show" style="width:500px; margin:10px 10px 10px 370px;"
            role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
    @endif

    <div class="card" style="width:500px; margin:10px 10px 10px 370px;">
        <div class="card-header">Login Form
        </div>
        <div class="card-body">

            <form action="{{ route('check') }}" method="post">
                @csrf
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" required><br>
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" required><br>
                <a href="/daftar"><button type="button" class="btn btn-success"><i class="bi bi-box-arrow-in-up-right">
                        </i>Daftar</button></a>
                <button type="submit" class="btn btn-success" style="margin-left:285px"><i
                        class="bi bi-box-arrow-in-right "> </i>Login</button>
            </form>
        </div>
    </div>
@endsection
