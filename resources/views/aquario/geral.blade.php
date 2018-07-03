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
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Temperatura atual</span>
              <span class="info-box-number" id="tempAtual"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Temperatura mínima</span>
              <span class="info-box-number" id="tempMinima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-thermometer-half"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Temperatura máxima</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
        
<p style="font-weight: bold; font-size: 20px;">TOMADAS</p>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 1</span>
              <span class="info-box-number" id="tomada1"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 2</span>
              <span class="info-box-number" id="tomada2"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 3</span>
              <span class="info-box-number" id="tomada3"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 4</span>
              <span class="info-box-number" id="tomada4"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tomada 5</span>
              <span class="info-box-number" id="tomada5"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
        
<p style="font-weight: bold; font-size: 20px;">POTÊNCIA ATUAL ILUMINAÇÃO</p>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Canal Azul</span>
              <span class="info-box-number" id="potAzul"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-white"><i class="fa fa-plug"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Canal Branco</span>
              <span class="info-box-number" id="potBranco"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        

<p style="font-weight: bold; font-size: 20px;">CONTROLES</p>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nível</span>
              <span class="info-box-number" id="controle_nivel"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Temperatura</span>
              <span class="info-box-number" id="controle_temp"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Iluminação</span>
              <span class="info-box-number" id="controle_iluminacao"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
              
      
      <div class="box-footer">
      	<button class="btn btn-danger" id="desativarControle">Desativar controle de nível de água</button><br><br>
      	<button class="btn btn-success" id="ativarControle">Ativar controle de nível de água</button>
      </div>
      

@stop
