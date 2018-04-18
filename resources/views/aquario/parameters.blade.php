@extends('adminlte::page')

@section('title', 'Parâmetros do aquário')

@section('content_header')
    <h1><center>Parâmetros do aquário</center></h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script src="js/crud.js"></script>

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createParameters">Cadastrar parâmetros</button>
        </div>
        <div class="box-body">


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>PH</th>
                        <th>Salinidade</th>
                        <th>Nitrito</th>
                        <th>Aquário</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($params as $param)
                <tr>
                    <td>{{ $param->data }}</td>
                    <td>{{ $param->ph }}</td>
                    <td>{{ $param->salinidade }}</td>
                    <td>{{ $param->nitrito }}</td>
                    <td>{{ $param->aquario->descricao }}</td>
                    <td>
                    <button class="edit-modal btn btn-primary">
                        <span class="glyphicon glyphicon-edit"></span> Editar
                    </button>

                    <button class="details-modal btn btn-info">
                        <span class="glyphicon glyphicon-th-list"></span> Detalhes
                    </button>
                </td>
                </tr>
            
            </tbody>
        @endforeach
            </table>
            
        </div>
    </div>
    @include ('parameters.create')
@stop
