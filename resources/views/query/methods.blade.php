@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        {{ $title }}
    </h1>
    <table class="table table-hover table-striped">
        @include('partials.list-users')
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
</div>
@stop