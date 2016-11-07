<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListadoProductosController extends Controller
{
   
   public function create()
   {
      //
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       $listado=  DB::table('lista_productos')
                    ->get()
                    ->where('lista_productos.id' ,'=', $id, 'AND comercio_listado.id = lista_productos.id')
                    ->join('comercio_listado_has_lista_productos', 'lista_productos.id', '=', 'comercio_listado_has_lista_productos.lista_productos_id')
                    ->join('comercio_listado', 'comercio_listado.id', '=', 'comercio_listado_has_lista_productos.comercio_listado_id');
       return view('comercio.listado',compact('listado'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      //
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
      //
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      //
   }
}
