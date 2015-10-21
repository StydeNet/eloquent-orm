@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        Lista de usuarios en select (LISTS)
    </h1>
    {!! Form::open() !!}
    <div class="form-group">
    {!! Form::select('users', $users, null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@stop