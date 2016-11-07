@extends('layout/template')
@section('content')
    <h1>Listado de Productos</h1>

    <table class="table">
     <thead class="thead-inverse">
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
             <td><img src="{{asset('imagenes/'.$l->foto_producto.'.jpg')}}" height="100" width="100"></td>
     @endforeach
     
     </tbody>

     <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('inicio')}}" class="btn btn-primary">Volver al inicio</a>
            </div>
     </div>
    </table>
@stop