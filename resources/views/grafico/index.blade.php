@extends('adminlte::page')

@section('title', 'Gráficos')

@section('content_header')
    <h1><center>Gráficos</center></h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    {!! Charts::assets() !!}

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            {!! $chart->render() !!}
        </div>
    </div>

@stop
