@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        Paginate Eloquent
    </h1>
    <p>
        {{ $users->total() }} Registros |
        Página {{ $users->currentPage() }} 
        de {{ $users->lastPage() }}
    </p>
    <table class="table table-hover table-striped">
        @include('partials.list-users')
        <tbody>
            @include('partials.list-users')
        </tbody>
    </table>
    {!! $users->render() !!}
</div>
@stop