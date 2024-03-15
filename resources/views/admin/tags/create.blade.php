@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    <h1>Create tag</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.tags.store']) !!}
                @include('admin.tags.partials.form')
            {!! Form::submit('Crerar etiqueta', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
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
            $(document).ready(function() {
                $("#name").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });
        </script>
    @endsection

