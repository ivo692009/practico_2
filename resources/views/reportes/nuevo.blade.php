@extends('layout.template')
@section('content')
    <h1>Reporte de Errorres</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'reportes.store']) !!}
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descripcion', 'Direccion:') !!}
        {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop