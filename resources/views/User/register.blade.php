@extends('layout')
@section('datos')
<form action="/register" method="post" class="w-25 m-auto">
    @csrf
    <div class="form-group mb-3 mt-4">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group mb-3 mt-4">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="form-group mb-3 mt-4">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group mb-3 ">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group mb-3 ">
        <label for="exampleInputPassword1">Password Confirm</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter again password">
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
    <a href="/login"><div class="btn btn-secondary mt-3">Ya tienes cuenta? Logueate</div></a>

</form>
@endsection