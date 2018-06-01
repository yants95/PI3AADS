@extends('adminlte::page')

@section('title', 'Tomadas  ')

@section('content_header')
    <h1>Tomadas</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script src="js/crud.js"></script>

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <table class="table table-hover">
                <div class="col-md-12">
                    <div class="col-sm-3">
                        <label>Saída 1</label><br>
                        <button type="button" class="btn btn-success">Tomada 1</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 2</label><br>
                        <button type="button" class="btn btn-success">Tomada 2</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 3</label><br>
                        <button type="button" class="btn btn-success">Tomada 3</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 4</label><br>
                        <button type="button" class="btn btn-success">Tomada 4</button>
                    </div>
                </div>

                <br><br><br><br><br><br>

                <div class="col-md-12">
                    <div class="col-sm-3">
                        <label>Saída 5</label><br>
                        <button type="button" class="btn btn-success">Tomada 5</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 6</label><br>
                        <button type="button" class="btn btn-success">Tomada 6</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 7</label><br>
                        <button type="button" class="btn btn-success">Tomada 7</button>
                    </div>
                    <div class="col-sm-3">
                        <label>Saída 8</label><br>
                        <button type="button" class="btn btn-success">Tomada 8</button>
                    </div>
                </div>
            </table>
        </div>
    </div>
    @include('tomadas.create')
@stop
