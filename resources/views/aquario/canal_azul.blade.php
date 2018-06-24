@extends('adminlte::page')
@section('title', 'Canal azul')
@section('content_header')
<h1>Canal azul</h1>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('js/canal_azul.js') }}"></script>
@stop

@section('content')
<div class="box">
  <div class="box-header">
  </div>
  <div class="box-body">

    <table class="table table-hover">

      <div class="col-md-12">
        <label style="font-size: 15px; color: red">Obs: A potência de cada canal vai de 0 a 100.</label><br>
      </div><br><br>

      <div class="col-md-12">
        <div class="col-sm-2 offset-2">
          <label>1º horário e potência</label><br>
          <input type="text" class="form-control" id="pHorario1" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" id="pPotencia1" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>2º horário e potência</label><br>
          <input type="text" class="form-control" id="pHorario2" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" id="pPotencia2" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>3º horário e potência</label><br>
          <input type="text" class="form-control" id="pHorario3" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" id="pPotencia3" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>4º horário e potência</label><br>
          <input type="text" class="form-control" id="pHorario4"  placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" id="pPotencia4" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>5º horário e potência</label><br>
          <input type="text" class="form-control" id="pHorario5"  placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" id="pPotencia5" placeholder="Potência: 70% vira 070">
        </div>
      </div><br><br><br><br><br><br><br><br>

      <div class="col-md-12">
        <div class="col-sm-2 offset-2">
          <label>1º horário e potência</label><br>
          <input type="text" class="form-control" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>2º horário e potência</label><br>
          <input type="text" class="form-control" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>3º horário e potência</label><br>
          <input type="text" class="form-control" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>4º horário e potência</label><br>
          <input type="text" class="form-control" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" placeholder="Potência: 70% vira 070">
        </div>

        <div class="col-sm-2">
          <label>5º horário e potência</label><br>
          <input type="text" class="form-control" placeholder="Hora 08:30 vira 0830"><br>
          <input type="text" class="form-control" placeholder="Potência: 70% vira 070">
        </div>
      </div><br><br><br><br>



    </table>
    <div class="box-footer">
      <button class="btn btn-success" id="EnviarCincoPrimeiros">Enviar 5 primeiros horários</button>
      <button class="btn btn-success" id="ultimosHorarios5">Enviar 5 últimos horários</button>
    </div>
  </div>
</div>

@stop
