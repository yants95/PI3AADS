@extends('adminlte::page')

@section('title', 'Tomadas  ')

@section('content_header')
    <h1>Tomadas</h1>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/tomadas.js') }}"></script>
    
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-2">
                        <label>Tomada 1</label><br>
                        <select class="form-control" id="tomada1">
                        	<option value="">Selecione</option>
                        	<option value="1">Ligar</option>
                        	<option value="0">Desligar</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Tomada 2</label><br>
                        <select class="form-control" id="tomada2">
                        	<option value="">Selecione</option>
                        	<option value="1">Ligar</option>
                        	<option value="0">Desligar</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Tomada 3</label><br>
                        <select class="form-control" id="tomada3">
                        	<option value="">Selecione</option>
                        	<option value="1">Ligar</option>
                        	<option value="0">Desligar</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Tomada 4</label><br>
                        <select class="form-control" id="tomada4">
                        	<option value="">Selecione</option>
                        	<option value="1">Ligar</option>
                        	<option value="0">Desligar</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label>Tomada 5</label><br>
                        <select class="form-control" id="tomada5">
                        	<option value="">Selecione</option>
                        	<option value="1">Ligar</option>
                        	<option value="0">Desligar</option>
                        </select>
                    </div>
                    </div>
		    <div class="col-md-12">
                      <div class="col-sm-2">
                      	 <br><button class="btn btn-success" id="btEnviar">Enviar</button>
                      </div>
		    </div>
            </table>
    </div>
    @include('tomadas.create')
@stop
