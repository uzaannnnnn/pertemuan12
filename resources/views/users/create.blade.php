@extends('students.layout')
@section('content')
    <div class="card" style="width:500px; margin:10px 10px 10px 370px;">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">

            <form action="{{ route('register') }}" method="post">
                @csrf
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control" required><br>
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control" required><br>
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" required><br>
                <a href="/"><button type="button" class="btn btn-danger"><i class="bi bi-box-arrow-left">
                        </i>Back</button></a>
                <button type="submit" class="btn btn-success" style="margin-left:302px"><i
                        class="bi bi-box-arrow-up-right"> </i>Save</button>
            </form>
        </div>
    </div>
@endsection
