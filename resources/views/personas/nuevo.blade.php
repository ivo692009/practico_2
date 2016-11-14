@extends('layout.template')
@section('content')
    <h1>Crear Nuevo Comercio</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'personas.store', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('nombre_y_app', 'Nombre del nuevo local:') !!}
        {!! Form::text('nombre_y_app',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dni', 'DNI:') !!}
        {!! Form::number('dni',null,['class'=>'form-control']) !!}
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