@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/geral.js') }}"></script>
@stop

@section('content')
<p style="font-weight: bold; font-size: 20px;">Data: <label id="dataArduino"></label> -  Hora: <label id="horaArduino"></p>

<p style="font-weight: bold; font-size: 20px;">TEMPERATURA</p>
    <div class="row">	
       <div class="box-footer">
    	  <button class="btn btn-success" id="ativarControleTemp">Ativar controle de iluminação</button>
    	  <button class="btn btn-danger" id="desativarControleTemp">Desativar controle de iluminação</button>
       </div><br>

	<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Controle de Temperatura</span>
              <span class="info-box-number" id="controle_temp"><small></small></span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Temperatura atual</span>
              <span class="info-box-number" id="tempAtual"><small></small></span>
            </div>
          </div>
        </div>

	<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Temperatura ideal</span>
              <span class="info-box-number" id="tempIdeal"><small></small></span>
            </div>
          </div>
        </div>	
        
	<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Temperatura mínima</span>
              <span class="info-box-number" id="tempMinima"><small></small></span>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Temperatura máxima</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
          </div>
        </div>
	
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Aquecimento</span>
              <span class="info-box-number" id="tomadaAquecimento"><small></small></span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Resfriamento</span>
              <span class="info-box-number" id="tomadaResfriamento"><small></small></span>
            </div>
          </div>
        </div>
</div><br>
        
<p style="font-weight: bold; font-size: 20px;">ILUMINAÇÃO</p>
        <div class="row">
	    <div class="box-footer">
              <button class="btn btn-success" id="ativarIluminacaoAutomatica">Ativar iluminação automática</button>
              <button class="btn btn-success" id="ativarIluminacaoManual">Ativar iluminacão manual</button>
	      <button class="btn btn-success" id="simularIluminacao">Simular iluminação automática</button>
            </div><br>
	<div class="col-md-4 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>
	    <div class="info-box-content">
	      <span class="info-box-text"> Modo da Iluminação</span>
	      <span class="info-box-number" id="controle_iluminacao"><small></small></span>
	    </div>
	  </div>
	</div>

	    <div class="col-md-4 col-sm-6 col-xs-12">
	      <div class="info-box">
		<span class="info-box-icon bg-blue"><i class="fa fa-plug"></i></span>
		<div class="info-box-content">
		  <span class="info-box-text">Potência atual canal Azul</span>
		  <span class="info-box-number" id="potAzul"><small></small></span>
		</div>
	      </div>
	    </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-white"><i class="fa fa-plug"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Potência atual canal Branco</span>
                  <span class="info-box-number" id="potBranco"><small></small></span>
                </div>
              </div>
	    </div>
</div><br>
        
<p style="font-weight: bold; font-size: 20px;">REPOSIÇÃO DE ÁGUA DOCE</p>
    <div class="row">
	<div class="box-footer">
    	  <button class="btn btn-success" id="ativarControle">Ativar controle de nível de água</button>
    	  <button class="btn btn-danger" id="desativarControle">Desativar controle de nível de água</button>
    	</div><br>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Controle de nível de água</span>
              <span class="info-box-number" id="controle_nivel"><small></small></span>
            </div>
          </div>
        </div>
	
	<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Número de reposições</span>
              <span class="info-box-number" id="controle_repos"><small></small></span>
            </div>
          </div>
        </div>
    </div><br>        

<p style="font-weight: bold; font-size: 20px;">TOMADAS</p>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Tomada 1</span>
              <span class="info-box-number" id="tomada1"><small></small></span>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Tomada 2</span>
              <span class="info-box-number" id="tomada2"><small></small></span>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Tomada 3</span>
              <span class="info-box-number" id="tomada3"><small></small></span>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Tomada 4</span>
              <span class="info-box-number" id="tomada4"><small></small></span>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 5</span>
              <span class="info-box-number" id="tomada5"><small></small></span>
            </div>
          </div>
        </div>
</div>

@stop
