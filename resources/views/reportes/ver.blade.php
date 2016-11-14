@extends('layout/template')
@section('content')
    <h1>Listado de Reportes</h1>

    <table class="table">
     <thead class="thead-inverse">
     <tr class="bg-info">
         <th>Titulo</th>
         <th>Descripcion</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($l as $la)
         <tr>
             <td>{{ $la->titulo }}</td>
             <td>{{ $la->descripcion }}</td>
     @endforeach
     
     </tbody>

     <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('inicio')}}" class="btn btn-primary">Volver al inicio</a>
            </div>
     </div>
    </table>
@stop