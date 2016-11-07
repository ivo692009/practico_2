<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComercioListadoController extends Controller
{
   public function index()
   {
      $listado = DB::table('comercio_listado')->get();
      return view('comercio.index',['listado' => $listado]);
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   
   public function create()
   {
      return view('comercio.nuevo');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     $nuevo=$request->all();
     ComercioListadoController::create($nuevo);
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
       $comercio=  DB::table('comercio_listado')->where('id' , $id) ->first();
       return view('comercio.perfil',compact('comercio'));
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
