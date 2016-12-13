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
  

    public function search(Request $request)
    {
        

         $rides=\DB::table('rides')->where('from', 'ILIKE', '%' . trim($request -> get(trim('from'))) . '%')
                                    ->where('to','ILIKE', '%' . trim($request -> get(trim('to'))) . '%')         
                                    -> get();
        
        return view('home',compact('rides'));
    }
}
