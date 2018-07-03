@extends('adminlte::page')

@section('title', 'Temperatura  ')

@section('content_header')
    <h1>Temperatura</h1>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/temperatura.js') }}"></script>

@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Temperatura mínima</label>
                    	<input type="text" class="form-control" id="tempMinima" placeholder="Exemplo: 26">
                    </div>

                    <div class="col-sm-3">
                    	<label>Temperatura máxima</label>
                    	<input type="text" class="form-control" id="tempMaxima" placeholder="Exemplo: 27">
                    </div>

                    <div class="col-sm-3">
                    	<label>Temperatura ideal</label>
                    	<input type="text" class="form-control" id="tempIdeal" placeholder="Exemplo: 26.5">
                    </div>
     		</div>
		<div class="col-md-12">
	            <div class="col-sm-3">
    	                <br><button class="btn btn-success" id="btEnviar">Enviar</button>
               	    </div>
               </div>
               </div>
            </table>
    </div>

@stop
