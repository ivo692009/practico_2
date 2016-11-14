<?php

namespace App\Http\Controllers;
use App\Reportes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    
     public function show()
   {
       $l = DB::table('reportes')
                    ->get();
        return view('reportes.ver',compact('l'));
   }
    
    public function create()
   {
      return view('reportes.nuevo');
   }
   
   
   public function store(Request $request)
   {
     $nuevo= new Reportes ($request -> all());
     $nuevo->save();
     
     return redirect('inicio');
    }
}