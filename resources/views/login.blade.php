@extends('layout')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
    <h1>TEAM 5 - AWS</h1>
    <h2>Investments Management System</h2>
    <form class="w-50 border p-5 mt-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="w-100 btn btn-primary">LOG IN</button>
    </form>
</div>
@endsection