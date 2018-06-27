@extends('adminlte::page')

@section('title', 'Temperatura  ')

@section('content_header')
    <h1>Temperatura</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/temperatura.js') }}"></script>

@stop

@section('content')
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">

            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Temperatura mínima</label>
                    	<input type="text" class="form-control" id="tempMinima" placeholder="Exemplo: 27.5" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-3">
                    	<label>Temperatura mínima</label>
                    	<input type="text" class="form-control" id="tempMaxima" placeholder="Exemplo: 27.5" required>
                    </div>
                </div>

                <div class="col-md-12">
                <div class="box-footer">
                  <button class="btn btn-success" id="btEnviar">Enviar</button>
                </div>
                </div>
            </table>

        </div>
    </div>

@stop
