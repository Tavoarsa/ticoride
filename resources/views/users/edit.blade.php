@extends('layouts.app')

@section('content')

 <div class="container text-center">
        
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> EDITAR USUARIOS 
            </h1>
        </div>
        
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('errors.validaciones')
                    @endif
                    
                    {!! Form::model($user, array('route' => array('user.update', $user))) !!}
                    
                        <input type="hidden" name="_method" value="PUT">
        
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            
                            {!!Form::text('name',null,array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>
                        
                      
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el correo...',
                                        //'required' => 'required'
                                    )
                                ) 
                            !!}
                        </div>                     
                                             
                     
                       
                        
                       <!-- <fieldset>
                            <legend>Cambiar password:</legend>
                            <div class="form-group">
                                <label for="password">Nuevo Password:</label>
                                
                                {!! 
                                    Form::password(
                                        'password', 
                                        array(
                                            'class'=>'form-control',
                                            //'required' => 'required'
                                        )
                                    ) 
                                !!}
                            </div>
                            
                            <div class="form-group">
                                <label for="confirm_password">Confirmar Nuevo Password:</label>
                                
                                {!! 
                                    Form::password(
                                        'password_confirmation',
                                        array(
                                            'class'=>'form-control',
                                            //'required' => 'required'
                                        )
                                    ) 
                                !!}
                            </div>
                        </fieldset><hr>-->
                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                           
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        
    </div>



@stop