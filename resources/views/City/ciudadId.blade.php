@extends('layout')
@section('datos')

@guest
    <h3 class="w-50 m-auto text-center mt-5">Debe de iniciar sesión para poder consultar esta información</h3>
    <div class="d-flex justify-content-center mt-5">
        <a href="/login" class="btn btn-primary " role="button" aria-pressed="true">Ir a login</a>
    </div>    
@endguest

@auth
    <table class="d-flex justify-content-center mt-5 table">
        <tr>
            <th>Nombre</th>
            <td>{{$dato->Name}}</>
        </tr>
        <tr>
            <th>Abreviatura</th>
            <td>{{$dato->CountryCode}}</>
        </tr>
        <tr>
            <th>Distrito</th>
            <td>{{$dato->District}}</td>
        </tr>
        <tr>
            <th>Población Total</th>
            <td>{{$dato->Population}}</td>
        </tr>
        <tr>
            <td>
                <a href="/ciudades" class="btn btn-primary" role="button" aria-pressed="true">Volver a las ciudades</a>
            </td>
        </tr>
    </table>
@endauth



@endsection