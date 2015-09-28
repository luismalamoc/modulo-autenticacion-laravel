@extends ('layouts.master')

@section ('title') Módulo de Autenticación @stop

@section('content')

  <div class="col-lg-12">	            
     <center><p>Saludos <b>{{ Auth::user()->name.' '.Auth::user()->lastname }}</b></p></center> 
		  
        <a href="{{ route('logout') }}">
          <button class="btn btn-lg btn-warning btn-block" type="submit">Salir</button>
        </a>
      
     
	</div>

@stop