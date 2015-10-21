@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>Texto</p>
        </div>
    </div>

    <div class="container">
    <h1 class="page-header">
        Últimos usuarios registrados
    </h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Genero</th>
                <th>Biografía</th>
            </tr>
        </thead>
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
</div>

@stop