@extends('layouts.app')
@section('content')
<div class="container text-center">
		<div class="page-header">
			<h1>				
			<a href="{{ url('/ride/create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Agregar  Ride</a>            
			</h1>
		</div>
		<div class="page">
           
    			<div class="row">

                    <div class="table-responsive">
             <table class="table" id="rides">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Activo</th> 
                        <th>Editar</th>                       
                        <th>Eliminar</th> 
                    </tr>
                </thead>
                <tbody>

                    @foreach($rides as $ride )
                    <tr>
                        <td>{{$ride->name_ride}}</td>
                        <td>{{$ride->from}}</td>
                        <td>{{$ride->to}}</td>
                        <td>{{$ride->activo==1? "SI" : "No"}}</td>
                        <td>
                            <a href="{{route('ride.edit',$ride->id)}}" class="btn btn-primary">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                         <td>
                            {!!Form::open(['route'=>['ride.destroy',$ride->id]])!!}
 
                                <input type="hidden" name="_method"  value="DELETE">
                                <button onClick="return confirm('Eliminar Registro?)" class="btn btn-danger">
 
                                    <i class="fa fa-trash-o"></i>
                                </button>
 
                            {!!Form::close()!!}                          
                         </td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>            
        </div>
    				                          
                </div> 
          
                   
	   </div>

</div>





@stop