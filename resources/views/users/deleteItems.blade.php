@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        Eliminar varios Items
    </h1>
    <p>
        {{ $users->total() }} Registros |
        Página {{ $users->currentPage() }} 
        de {{ $users->lastPage() }}
    </p>
    {!! Form::open(['route' => 'deleteItems', 'method' => 'delete']) !!}
    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    <table class="table table-hover table-striped">
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{!! Form::checkbox('ids[]', $user->id) !!}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->biography }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! Form::close() !!}
    {!! $users->render() !!}
</div>
@stop