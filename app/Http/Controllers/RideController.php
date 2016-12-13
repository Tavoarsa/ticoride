<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ride;
use Auth;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rides= Ride::where('idUser',Auth::id())->get();
       
        return view('rides.index',compact('rides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $rules =array
        (
            'name_ride'                 => 'required',  
            'name_ride'                 => 'required',
            'from'               => 'required',          
            'to'                 => 'required',
            'hour_start'                 => 'required',
            'hour_end'                 => 'required'
        );

        $this->validate($request,$rules);
        $ride= New Ride();
        $ride->idUser = Auth::id();
        $ride->name_ride=$request->name_ride;
        $ride->from=$request->from;
        $ride->to=$request->to;
        $ride->hour_start=$request->hour_start;
        $ride->hour_end=$request->hour_end;
        $ride->descripcion=$request->descripcion;
        $ride->activo=$request->has('activo') ? 1 : 0;
        $ride->save();

        return redirect() -> route('ride-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         dd("test");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ride= Ride::where('id','=',$id)->first();
        return view('rides.edit',compact('ride'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules =array
        (
             'name_ride'                 => 'required',  
            'name_ride'                 => 'required',
            'from'               => 'required',          
            'to'                 => 'required',
            'hour_start'                 => 'required',
            'hour_end'                 => 'required'
        );

        $this->validate($request,$rules);

        $ride=Ride::findOrFail($id);
        $ride->activo=$request->has('activo') ? 1 : 0;
        $input=$request->all();
        $ride->fill($input)->save();
        return redirect() -> route('ride-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ride=Ride::find($id);
        $ride->delete();       
        $message = 'Ride eliminado correctamente!';        
        return redirect()->route('ride-index')->with('message', $message);
    }
}
