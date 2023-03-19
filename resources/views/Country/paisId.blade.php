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
            <th>Code</th>
            <td>{{$dato->Code}}</>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$dato->Name}}</>
        </tr>
        <tr>
            <th>Esperanza de vida</th>
            <td>{{$dato->LifeExpectancy}}</td>
        </tr>
        <tr>
            <th>Población Total</th>
            <td>{{$dato->Population}}</td>
        </tr>
        <tr>
            <th>GNP</th>
            <td>{{$dato->GNP}}</td>
        </tr>
        <tr>
            <th>Region</th>
            <td>{{$dato->Region}}</td>
        </tr>
        <tr>
            <th>Continente</th>
            <td>{{$dato->Continent}}</td>
        </tr>
        <tr>
            <th>Gobierno</th>
            <td>{{$dato->GovernmentForm}}</td>
        </tr>
        <tr>
            <th>Presidente</th>
            <td>{{$dato->HeadOfState}}</td>
        </tr>
        <tr>
            <td>
                <a href="/paises" class="btn btn-primary" role="button" aria-pressed="true">Volver a los paises</a>
            </td>
        </tr>
    </table>

@endauth

@endsection