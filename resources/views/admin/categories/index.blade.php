@extends('adminlte::page')

@section('title', 'Molina')

@section('content_header')
    <h1>Ver Categorias</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif

<div class="card">
    <card class="card-header">
        <a class="btn btn-secondary" href="{{ route('admin.categories.create') }}">Agreagr Categoría</a>
    </card>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th colspan="2"></th>
            </tr>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                            @csrf
                                @method('delete')
                            <button type="submit" class= "btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach

            </tbody>

        </table>
    </div>
</div>
@stop
