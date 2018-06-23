@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>PA</h1>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/geral.js') }}"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Temperatura atual</span>
              <span class="info-box-number" id="tempAtual"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Temperatura mínima</span>
              <span class="info-box-number" id="tempMinima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Temperatura máxima</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-4">
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Tomada 1</span>
              <span class="info-box-number" id="comentarios"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Tomada 2</span>
              <span class="info-box-number" id="tempMinima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Tomada 3</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Tomada 4</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="info-box">
           <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
         
            <div class="info-box-content">
              <span class="info-box-text">Tomada 5</span>
              <span class="info-box-number" id="tempMaxima"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        
      </div>
      
      <div class="box-footer">
      	<button class="btn btn-danger" id="desativarControle">Desativar controle de nível de água</button><br><br>
      	<button class="btn btn-success" id="ativarControle">Ativar controle de nível de água</button>
      </div>
      

@stop