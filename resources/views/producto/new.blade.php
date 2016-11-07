@extends('layout.template')
@section('content')
    <h1>Crear Nuevo Producto</h1>
    {!! Form::open(['method' => 'POST', 'route' => 'producto.store']) !!}
    <div class="form-group">
        {!! Form::number('id_comercio','secret',$id)  !!}
        {!! Form::label('nombre', 'Nombre del nuevo producto:') !!}
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cantidad_porciones', 'Cantidad de Porciones:') !!}
        {!! Form::text('direccion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('precio', 'Precio del Producto:') !!}
        {!! Form::number('foto',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tiempo_produccion', 'Tiempo Estimado de Produccion:') !!}
        {!! Form::number('tiempo_produccion',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto_producto', 'Foto del Producto:') !!}
        {!! Form::text('foto_producto',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop