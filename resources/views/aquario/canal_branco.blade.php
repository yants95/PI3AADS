@extends('adminlte::page')
@section('title', 'Canal branco')
@section('content_header')
<h1>Canal branco</h1>

<script type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/canal_branco.js') }}"></script>
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
          <input type="text" class="form-control" maxlength="5" id="pHorario1" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="pPotencia1" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>2º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="pHorario2" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="pPotencia2" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>3º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="pHorario3" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="pPotencia3" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>4º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="pHorario4"  placeholder="08:30 => 0830"><br>
          <input type="text"  maxlength = "35" class="form-control" id="pPotencia4" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>5º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="pHorario5"  placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="pPotencia5" placeholder="70% => 070">
        </div>
      </div><br><br><br><br><br><br><br><br>

      <div class="col-md-12">
        <div class="col-sm-2 offset-2">
          <label>6º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="uHorario1" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="uPotencia1" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>7º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="uHorario2" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="uPotencia2" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>8º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="uHorario3" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="uPotencia3" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>8º horário e potência</label><br>
          <input type="text" class="form-control" maxlength="5" id="uHorario4" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="uPotencia4" placeholder="70% => 070">
        </div>

        <div class="col-sm-2">
          <label>10º horário e potência</label><br>
          <input type="text" class="form-control"  maxlength="5"id="uHorario5" placeholder="08:30 => 0830"><br>
          <input type="text" maxlength="3" class="form-control" id="uPotencia5" placeholder="70% => 070">
        </div>
      </div><br><br><br><br>



    </table>
    <div class="box-footer">
      <button class="btn btn-success" id="EnviarCincoPrimeiros">Enviar 5 primeiros horários</button>
      <button class="btn btn-success" id="EnviarCincoUltimos">Enviar 5 últimos horários</button>
    </div>
  </div>
</div>

@stop
