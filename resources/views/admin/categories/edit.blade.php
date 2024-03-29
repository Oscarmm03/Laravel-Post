@extends('adminlte::page')

@section('title', 'Molina')

@section('content_header')
<h1>Editar Categoria</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
        <strong>{{ session('info') }}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method'=>'put']) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the category name']) !!}
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Enter the slug name',
            'readonly']) !!}
            @error('slug')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar category', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
    $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
</script>
@endsection