@extends('layout')

@section('content')
<div class="container">
    @include('books.partials.header')
    <table class="table table-hover table-striped">
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>
                    @if(is_null($book->deleted_at))
                        {!! Form::open(['route' => ['delete-book', $book->id], 'method' => 'delete']) !!}
                            <button type="submit" title="Eliminar">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        {!! Form::close() !!}
                    @else
                        <a href="{{ route('restore', $book->id) }}">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                    @endif
                </td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>
                    @if($book->deleted_at)
                        {!! Form::open(['route' => ['forceDelete', $book->id], 'method' => 'delete']) !!}
                            <button type="submit" title="Eliminar">
                                <i class="glyphicon glyphicon-remove"></i>
                            </button>
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $books->render() !!}
</div>
@stop