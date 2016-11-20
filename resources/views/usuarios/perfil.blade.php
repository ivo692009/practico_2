@extends('layout/template')
@section('content')
    <h1>Perfil</h1>
    <div class="form-group">
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre del Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{$persona->nombre}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="apellido" class="col-sm-2 control-label">Apellido del Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{$persona->apellido}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="apellido" class="col-sm-2 control-label">DNI del Usuario</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{$persona->dni}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="direccion" class="col-sm-2 control-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="{{$persona->direccion}}" readonly>
            </div>
        </div>          
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('inicio')}}" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>
    </div>
@stop