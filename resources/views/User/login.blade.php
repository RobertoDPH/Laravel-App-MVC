@extends('layout')
@section('datos')
  <form action="/login" method="POST" class="w-25 m-auto">
    @csrf
    <div class="form-group mb-3 mt-4">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter username">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group mb-3 ">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    <a href="/register"><div class="btn btn-secondary mt-3">No tienes cuenta? Regístrate</div></a>
  </form>
@endsection