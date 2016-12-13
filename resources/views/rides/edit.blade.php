@extends('layouts.app')
 
@section('content')
<div class="container text-center">
     <div class="page-header subheader">
        <h1>
            RIDE<small class="subheader">[Agregar Ride]</small>
        </h1>     
    </div>
    <div class="row">
        <div>
          @if (count($errors) > 0)
                        @include('errors.validaciones')
                    @endif

           {!! Form::model($ride, [
             'method' => 'PATCH',
            'route' => ['ride.update', $ride->id]
            ]) !!}
 
            <div class="form-group">
                        <label class="subheader"><h2>Nombre Ride</h2></label>

                         {!! Form::text(
                            'name_ride',null,array(
                            'class'=>'form-control',
                            'placeholder'=> 'Ingresa el nombre del ride'
                            ))
                             !!}
                
                    </div>

                    <div class="form-group">

                             
                                  <div class="row" id="placesToFind">
                                   
                                 
                                    <div class="col-md-6" id="cont-start-location">

                                      <label class="frm-label-style" for="">Partida:<span>{{$ride->from}}</span> </label>
                                      <input class="frm-input-text-style rides-data" id="from" type="text" name="from" value="">
                                    </div>
                                    <div class="col-md-6" id="cont-end-location">
                                      <label class="frm-label-style" for="">Destino<span>{{$ride->to}}</label>
                                      <input class="frm-input-text-style rides-data" id="to"type="text" name="to" value="">
                                    </div>
                                  </div>
                              
                    </div>                        

                    <div class="form-group">
                            <label class="subheader"><h2>Hora de Inicio</h2></label>

                            {!! Form::time(
                                'hour_start',null,array(
                                'class'=>'form-control',
                                'placeholder'=> 'Hora de Inicio'
                            ))
                            !!}                
                    </div>
                        
                    <div class="form-group">
                        <label class="subheader"><h2>Hora en Finalizar</h2></label>

                        {!! Form::time(
                            'hour_end',null,array(
                            'class'=>'form-control',
                            'placeholder'=> 'Hora en que Finaliza'
                        ))
                        !!}               
                    </div>                              
                           
                    <div class="form-group">
                            <label class="subheader"><h2>Descripción</h2></label>

                            {!! Form::text(
                                'descripcion',null,array(
                                'class'=>'form-control',
                                'placeholder'=> 'Descripcion'
                            ))
                            !!}
                    </div>
                        
                    <div class="form-group">
                         <label class="subheader"><h2>Estado de Ride (Activo~Desactivo)</h2></label>

                             {!! Form::checkbox(
                                    'activo',null,true
        
                                    )
                                !!}
                
                     </div>
                        <hr>             
                        
                    <div class="form-group">
                            {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                            
                    </div>
             
        {!!Form::close()!!}
             
    </div>
             
         
    </div>
</div>

@stop