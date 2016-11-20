<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
class UsuariosController extends Controller
{
    
   
   public function create()
   {
      return view('usuarios.nuevo');
   }

   public function store(Request $request)
   {
     $nuevo= new Usuarios(array(
         'nombre'   => $request->get('nombre'),
         'apellido' => $request->get('apellido'),
         'dni'      => $request->get('dni'),
         'direccion'=> $request->get('direccion')
         
     ));
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
       $usuario  =  DB::table('usuarios')
                    ->where('id' , $id) 
                    ->first();
 
       return view('usuarios.perfil',compact('usuario'));
   }
 
   public function edit($id)
   {
      $persona = Usuarios::findOrFail($id);
     
       return view('usuarios.editar',compact('persona'));
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
        
        $b= Usuarios::findOrFail($id);

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
       Usuarios::find($id)->delete();
       return redirect('inicio');
   }
}
