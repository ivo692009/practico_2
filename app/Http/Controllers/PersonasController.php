<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Personas;
use Illuminate\Support\Facades\DB;

class PersonasController extends Controller
{
    public function index()
   {
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   
   public function create()
   {
      return view('personas.nuevo');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     $nuevo= new Personas(array(
         'nombre_y_app'   => $request->get('nombre_y_app'),
         'dni'            => $request->get('dni'),
         'direccion'      => $request->get('direccion'),
         'foto'           => $request->file('foto')->getBasename()
     ));
//      dd($nuevo);
     $nuevo->save();
     
     $request->file('foto')->move(base_path() . '/public/imagenes/');
     // dd($nuevo);
     
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
   
       
   }
   
   /**
    * 
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
       $e=Personas::find($id);
       return view('personas.editar',compact('e'));
      
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
      $eUpdate=Request::all();
      $e=Personas::find($id);
      $e->update($eUpdate);
      return redirect('inicio');
   }
   /*11111*
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
       Personas::find($id)->delete();
      return redirect('inicio');
   }
}
