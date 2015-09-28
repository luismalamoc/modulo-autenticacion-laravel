@extends ('layouts.master')

@section ('title') Módulo de Autenticación @stop

@section('content')
<div class="col-lg-12">	   
 			{{ Form::open(array('route' => 'login', 'method' => 'post', 'class' =>'form-signin')) }}
        <h2 class="form-signin-heading">Por favor inicie sesión</h2>           

        {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Nombre de Usuario')) }}
          
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña')) }}
        
        <label class="checkbox">
          Recordarme
          {{ Form::checkbox('rememberme', true) }}
        </label>

        {{ Form::submit('Entrar', array('class' => 'btn btn-lg btn-primary btn-block')) }}        
      {{ Form::close() }}
</div>  

@stop