@extends('layout/template')
@section('content')
 <h1>Listado de Comercios</h1>
 <a href="{{route('comercio.create')}}" class="btn btn-success">Crear un nuevo comercio</a>
 <table class="table">
     <thead>
     <tr class="bg-info">
         <th>Nombre del Local</th>
         <th>Direccion</th>
         <th>Puntaje</th>
         <th>Foto</th>
         <th colspan="3">Visitar Perfil</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($listado as $l)
         <tr>
             <td>{{ $l->nombre }}</td>
             <td>{{ $l->direccion }}</td>
             <td>{{ $l->puntaje }}</td>
             <td><img src="{{asset('imagenes/'.$l->foto.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{url('comercio',$l->id)}}" class="btn btn-primary">Visitar</a></td>
         </tr>
     @endforeach

     </tbody>

 </table>
 @stop