@extends('adminlte::page')

@section('title', 'Iluminação  ')

@section('content_header')
    <h1>Iluminação</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/iluminacao.js') }}"></script>
    
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
        
            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Potência canal azul</label>
                    	<input type="text" class="form-control" id="canalAzul" placeholder="Exemplo: 10" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Potência canal branco</label>
                    	<input type="text" class="form-control" id="canalBranco" placeholder="Exemplo: 30" required>
                    </div>
                </div>
            </table>
            <div class="col-md-12">
            	<label>Obs: A potência de cada canal vai de 0 a 100.</label><br>
            </div>
            <div class="box-footer">
            	<button class="btn btn-success" id="btEnviar">Enviar</button>
            </div>
        </div>
    </div>
    
@stop
