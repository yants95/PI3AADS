@extends('adminlte::page')

@section('title', 'Iluminação manual')

@section('content_header')
    <h1>Iluminação manual</h1>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/iluminacao.js') }}"></script>
    
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Potência canal azul</label>
                    	<input type="text" class="form-control" id="canalAzul" placeholder="Exemplo: 10" maxlength="3">
                    </div>

                    <div class="col-sm-3">
                    	<label>Potência canal branco</label>
                    	<input type="text" class="form-control" id="canalBranco" placeholder="Exemplo: 30" maxlength="3">
                    </div>
		    <div class="col-sm-4">
                    	<br><br>
                    	<label>Obs.: A potência de cada canal vai de 0 a 100.</label>
                    </div>
                </div>
            </table>
            <div class="col-md-12">
		<div class="col-sm-3">
            		<br><button class="btn btn-success" id="btEnviar">Enviar</button>
		</div>
            </div>
        </div>
    </div>
    
@stop
