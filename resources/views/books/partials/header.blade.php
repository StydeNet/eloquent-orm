<h1 class="page-header">
    SoftDeletes (Books)
</h1>
<p>
    {{ $books->total() }} Registros |
    Página {{ $books->currentPage() }} 
    de {{ $books->lastPage() }}
</p>
{!! Form::open(['route' => 'delBooks', 'method' => 'delete']) !!}
{!! Form::submit('Enviar a Papelera', ['class' => 'btn btn-danger']) !!}

<a href="{{ route('trashed') }}" class="btn btn-default">
    Ver todos
</a>