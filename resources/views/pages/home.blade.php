@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>
                Repositorio para la serie de Eloquent ORM de Italo Morales
                | @italomoralesf para @StydeNet
            </p>
        </div>
    </div>

    <div class="container">
    <h1 class="page-header">
        Últimos usuarios registrados
    </h1>
    <table class="table table-hover table-striped">
        @include('partials.head-users')
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
</div>

@stop