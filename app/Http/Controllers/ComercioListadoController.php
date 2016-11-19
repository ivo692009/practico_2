<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Comercio;
use Illuminate\Support\Facades\DB;

class ComercioListadoController extends Controller
{
   public function index()
   {
      $listado = DB::table('comercio_listado')
                    ->get();
      return view('comercio.index',compact('listado'));
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
     $nuevo= new Comercio(array(
         'nombre'   => $request->get('nombre'),
         'direccion'=> $request->get('direccion'),
         'foto'     => $request->file('foto')->getBasename()
     ));
      dd($nuevo);
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
       $comercio=  DB::table('comercio_listado')
                    ->where('id' , $id) 
                    ->first();
       $listado=  DB::table('lista_productos')
                    ->where('id_comercio' , $id)
                    ->select('lista_productos.*')
                    ->get();
//       return view('comercio.listado',compact('listado'));
       return view('comercio.perfil',compact('comercio'), compact('listado'));
   }
   
   public function productos($id){
       
       $listado=  DB::table('lista_productos')
                    ->where('id_comercio' , $id)
                    ->select('lista_productos.*')
                    ->get();
//       return view('comercio.listado',compact('listado'));
       return view('comercio.listado', compact('listado'));
       
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
      $persona = Comercio::findOrFail($id);
     
       return view('comercio.editar',compact('persona'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request, $id)
   {
        $persona = $request ->all();
        
        $b=  Comercio::findOrFail($id);

        $b->update($persona);
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
      Comercio::find($id)->delete();
      return redirect('inicio');
   }
}
