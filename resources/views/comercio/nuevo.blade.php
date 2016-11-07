@extends('layout.template')
@section('content')
    <h1>Crear Nuevo Comercio</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'comercio.store', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre del nuevo local:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('direccion', 'Direccion:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Foto Del Comercio') !!}
        {!! Form::file('foto', null, ['class' => 'field']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop