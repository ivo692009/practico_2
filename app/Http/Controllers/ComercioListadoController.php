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
         'nombre'=> $request->get('nombre'),
         'direccion'=>$request->get('direccion'),
         'foto'=>$request->file('foto')->getClientOriginalExtension()
     ));
      
      $request->file('foto')->move(
        base_path() . '/public/imagenes/');
      
     $nuevo->save();
     
     return redirect('inicio');
     
     
//      $product = new Product(array(
//      'name' => $request->get('name'),
//      'sku'  => $request->get('sku')
//    ));
//
//    $product->save();
//
//    $imageName = $product->id . '.' . 
//        $request->file('image')->getClientOriginalExtension();
//
//    $request->file('image')->move(
//        base_path() . '/public/images/catalog/', $imageName
//    );
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
   
   public function rules()
    {
        return [
          'nombre'          => 'required',
          'direccion'       => 'required',
          'foto'            => 'required|mimes:jpg'
        ];
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
      Comercio::find($id)->delete();
      return redirect('inicio');
   }
}
