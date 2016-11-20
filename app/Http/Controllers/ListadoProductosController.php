<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Listado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListadoProductosController extends Controller
{
   
    public function index()
   {
      
   } 
    
   public function create($id)
   {
       return view('producto.new', compact('id'));
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     $nuevo= new Listado($request ->all());
     $nuevo->save();
     return redirect('inicio');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       $listado = DB::table('lista_productos')
                    ->where('id_comercio', $id)
                    ->get();
      return view('producto.index',compact('listado'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      $e=Listado::findOrFail($id);
      return view('producto.editar',compact('e'));
      
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request, $id)
   {
      $eUpdate=new Listado($request ->all());;
      $e=Listado::findOrFail($id);
      $e->update($eUpdate);
      return redirect('inicio');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      $e= Listado::findOrFail($id)->delete();
      return redirect('producto');
   }
}
