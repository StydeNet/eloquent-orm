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
                        {!! Form::checkbox('ids[]', $book->id) !!}
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
                        <a href="#">
                            <i class="glyphicon glyphicon-remove"></i>
                        </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! Form::close() !!}
    {!! $books->render() !!}
</div>
@stop