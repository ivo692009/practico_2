@extends('layout/template')
@section('content')
    <h1>Perfil</h1>
    <div class="form-group">
        <div class="form-group">
            <label for="foto" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
                <img src="{{asset('imagenes/'.$comercio->foto).'.jpg'}}" height="500" width="250" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre del Comercio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="isbn" placeholder="{{$comercio->nombre}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="direccion" class="col-sm-2 control-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="{{$comercio->direccion}}" readonly>
            </div>
        </div>
        <h1>Listado de Productos</h1>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ route('producto.create',$comercio->id) }}" class="btn btn-primary">Crear Producto</a>
            </div>
        </div>
            <table class="table">
             <thead>
             <tr class="bg-info">
                 <th>Nombre del Producto</th>
                 <th>Cantidad de porciones</th>
                 <th>Precio</th>
                 <th>Tiempo estimado de produccion</th>
                 <th>Foto</th>
             </tr>
             </thead>
             <tbody>
             @foreach ($listado as $l)
                 <tr>
                     <td>{{ $l->nombre }}</td>
                     <td>{{ $l->cantidad_porciones }}</td>
                     <td>{{ $l->precio }}</td>
                     <td>{{ $l->tiempo_produccion }}</td>
                     <td><img src="{{asset('imagenes/'.$l->foto_producto.'.jpg')}}" height="35" width="30"></td>
             @endforeach

             </tbody>
            </table>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('inicio')}}" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>
    </div>
@stop