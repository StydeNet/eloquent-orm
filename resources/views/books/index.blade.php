@extends('layout')

@section('content')
<div class="container">
    <h1 class="page-header">
        SoftDeletes (Books)
    </h1>
    <p>
        {{ $books->total() }} Registros |
        Página {{ $books->currentPage() }} 
        de {{ $books->lastPage() }}
    </p>
    {!! Form::open(['route' => 'delBooks', 'method' => 'delete']) !!}
    {!! Form::submit('Papelera', ['class' => 'btn btn-danger']) !!}
    <table class="table table-hover table-striped">
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{!! Form::checkbox('ids[]', $book->id) !!}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! Form::close() !!}
    {!! $books->render() !!}
</div>
@stop