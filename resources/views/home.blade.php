@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Rides

           
                {!!Form::open(['route'=>'searchRide','method'=>'GET'])!!}

                  <div class="form-group">
                    <label for="from">Punto de Partida</label>
                    <input type="text" name="from" class="form-control" id="from" placeholder="Cuidad Quesada">
                  </div>
                  <div class="form-group">
                    <label for="to">Punto de Llegada</label>
                    <input type="text"  name="to" class="form-control" id="to" placeholder="Cedral">
                  </div>
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </form>

                {!!Form::close()!!}

        


                </div>

                <div class="panel-body">
                   
                <div class="row">

                    <div class="table-responsive">
             <table class="table" id="rides">
                <thead>
                    <tr>                      
                        <th>Nombre</th>
                        <th>Punto de Salida</th>
                        <th>Punto de Llegada</th>
                        <th>Activo</th> 
                         
                    </tr>
                </thead>
                <tbody>

                    @foreach($rides as $ride )
                    <tr>                         
                        <td>{{$ride->name_ride}}</td>
                        <td>{{$ride->from}}</td>
                        <td>{{$ride->to}}</td>
                        <td>{{$ride->activo==1? "SI" : "No"}}</td>
                      
                    </tr>
                    @endforeach
                </tbody>    
            </table>            
        </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
