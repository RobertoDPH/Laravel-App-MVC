@extends('layout')
@section('datos')

@guest
    <h3 class="w-50 m-auto text-center mt-5">Debe de iniciar sesión para poder consultar esta información</h3>
    <div class="d-flex justify-content-center mt-5">
        <a href="/login" class="btn btn-primary " role="button" aria-pressed="true">Ir a login</a>
    </div>    
@endguest

@auth
    <h2 class="text-center mt-4 mb-4 m-auto bg-light w-50 p-3 rounded">Datos sobre los paises</h2>

    <div class="d-flex justify-content-center">
        {!! $datos->links()!!}
    </div>

    <div class="w-50 m-auto mt-2">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Población</th>
                    <th>Esperanza de vida</th>
                    <th>Contienente</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-light">
                @foreach($datos as $dato)
                    <tr class="text-center">
                        <td>{{$dato->Name}}</>
                        <td>{{$dato->Population}}</td>
                        <td class="w-25">{{$dato->LifeExpectancy}}</td>
                        <td>{{$dato->Continent}}</td>
                        <td><a class="btn btn-primary" href="{{route('paisId',['id'=>$dato->Code])}}">Detalles</a></td>
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