@extends('adminlte::page')

@section('title', 'Iluminação manual')

@section('content_header')
    <h1>Iluminação manual</h1>
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
                    	<input type="text" class="form-control" id="canalAzul" placeholder="Exemplo: 10" maxlength="3">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Potência canal branco</label>
                    	<input type="text" class="form-control" id="canalBranco" placeholder="Exemplo: 30" maxlength="3">
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
    
    <div class="box">
    	<div class="box-body">
			<button class="btn btn-danger" id="btDesativarIluminacao">Desativar iluminação</button>
    	</div>
    </div>
    
    <div class="box">
    	<div class="box-body">
    		<p style="color: darkblue; font-weight: bold; font-size: 20px;">Simulação</p><br>
    		<p style="font-weight: bold; font-size: 15px;">
    			Descrição: Irá executar uma simulação do dia da luminária, conforme potência informada pelo usuário nas integrações de 05 a 09.
O arduino vai efetuar a simulação das 10 potências informadas dos canais Azul e Branco simultãneamente.
Primeiramente vai apagar os 2 canais por 2 segundos; em seguida acionará as potências de 1 a 10 de cada canal (de maneira mútua), 
ficando por 5 segundos em cada potência; após as 10 potências o arduino desliga os 2 canais por 2 segundos; após isso continuará 
funcionando normalmente no modo automático, caso o mesmo esteja ativo.
			</p><br>
			<button class="btn btn-primary" id="btSimulacao">Iniciar simulação</button>
    	</div>
    </div>
    
@stop
