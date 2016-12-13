<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Ride;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  
//Funcion para buscar rides recibiendo el punto de partida y el destino
    public function search(Request $request)
    {
        
        //busca en la tabla rides( ILIKE ES PARA BUSCAR SIMILITUDES ENTRE EL NOMBRE QUE RECIBE CON EL QUE ESTA EN LA BASE DE DATOS)
        //TRIM ELIMINA ESPACIOS EN BLANCOS O OTROS CARACTERES 
         $rides=\DB::table('rides')->where('from', 'ILIKE', '%' . trim($request -> get(trim('from'))) . '%')
                                    ->where('to','ILIKE', '%' . trim($request -> get(trim('to'))) . '%')         
                                    -> get();
        
        return view('home',compact('rides'));
    }
}
