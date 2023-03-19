@extends('layout')
@section('datos')
    @guest
        <h3 class="w-50 m-auto text-center mt-5">Debe de iniciar sesión para poder consultar esta información</h3>
        <div class="d-flex justify-content-center mt-5">
            <a href="/login" class="btn btn-primary " role="button" aria-pressed="true">Ir a login</a>
        </div>    
    @endguest

    @auth

        <h2 class="text-center mt-4 mb-4 m-auto bg-light w-50 p-3 rounded">Datos sobre las ciudades</h2>

        <div class="d-flex justify-content-center">
            {!! $datos->links()!!}
        </div>

        <div class="w-50 m-auto mt-2">
            <table class="table table-dark table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Región</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach($datos as $dato)
                        <tr class="text-center">
                            <td>{{$dato->ID}}</td>
                            <td>{{$dato->Name}}</td>
                            <td>{{$dato->CountryCode}}</td>
                            <td>{{$dato->District}}</td>
                            <td><a class="btn btn-primary" href="{{route('ciudadId',['id'=>$dato->ID])}}">Detalles</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $datos->links()!!}
            </div>
        </div>

    @endauth
@endsection