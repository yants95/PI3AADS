@extends('adminlte::page')

@section('title', 'Gráficos')

@section('content_header')
    <h1><center>Gráficos</center></h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

<<<<<<< HEAD
    {!! Charts::assets() !!}
=======
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>
<<<<<<< HEAD
        <div class="box-body">
            {!! $chart->render() !!}
=======
        <div id="graph" class="box-body">
            
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
        </div>
    </div>

@stop
