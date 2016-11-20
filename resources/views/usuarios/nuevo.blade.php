@extends('layout.template')
@section('content')
    <h1>Crear Nuevo Comercio</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'usuarios.store']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre del nuevo usuario:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellido del nuevo usuario:') !!}
        {!! Form::text('apellido',null,['class'=>'form-control']) !!}
    </div>
        <div class="form-group">
        {!! Form::label('dni','DNI del nuevo usuario:') !!}
        {!! Form::number('dni', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('direccion', 'Direccion:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop