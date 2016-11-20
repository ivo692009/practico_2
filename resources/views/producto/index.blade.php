@extends('layout/template')

@section('content')
 <h1>Productos</h1>
 <a href="{{ url('/producto/create',$id) }}" class="btn btn-success">Crear Nuevo Producto</a>
 <hr>       
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Nombre del producto</th>
         <th>Cantidad de porciones</th>
         <th>Precio</th>
         <th>Tiempo de produccion del producto</th>
         <th>Imagen ilustrativa</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($listado as $l)
         <tr>
             <td>{{ $l->nombre }}</td>
             <td>{{ $l->cantidad_porciones }}</td>
             <td>{{ $l->precio }}</td>
             <td>{{ $l->tiempo_produccion }}</td>
             <td><img src="{{asset('imgenes/'.$l->foto_producto.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{route('producto.edit',$l->id)}}" class="btn btn-warning">Editar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['producto.destroy', $l->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection