@extends('layout')

@section('content')
<div class="container">
    @include('books.partials.header')
    {!! Form::open(['route' => 'delBooks', 'method' => 'delete']) !!}
    {!! Form::submit('Enviar a Papelera', ['class' => 'btn btn-danger']) !!}
    <a href="{{ route('trashed') }}" class="btn btn-default">
        Ver todos
    </a>
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