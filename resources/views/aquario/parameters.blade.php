@extends('adminlte::page')

@section('title', 'Parâmetros do aquário')

@section('content_header')
    <h1><center>Parâmetros do aquário</center></h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script src="../../js/crud-parameters.js"></script>

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
                    <button class="edit-modal btn btn-primary"      data-param="{{$param->data}}"
                                                                    data-ph="{{$param->ph}}"
                                                                    data-salinidade="{{$param->salinidade}}"
                                                                    data-calcio="{{$param->calcio}}"
                                                                    data-magnesio="{{$param->magnesio}}"
                                                                    data-reserva_alcalina="{{$param->reserva_alcalina}}"
                                                                    data-amonia="{{$param->amonia}}"
                                                                    data-nitrito="{{$param->nitrito}}"
                                                                    data-nitrato="{{$param->nitrato}}"
                                                                    data-fosfato="{{$param->fosfato}}"
                                                                    data-silica="{{$param->silica}}"
                                                                    data-toggle="modal"
                                                                    data-target="#editParameters">
                        <span class="glyphicon glyphicon-edit"></span> Editar
                    </button>

                    <button class="details-modal btn btn-info"      data-param="{{$param->data}}"
                                                                    data-ph="{{$param->ph}}"
                                                                    data-salinidade="{{$param->salinidade}}"
                                                                    data-calcio="{{$param->calcio}}"
                                                                    data-magnesio="{{$param->magnesio}}"
                                                                    data-reserva_alcalina="{{$param->reserva_alcalina}}"
                                                                    data-amonia="{{$param->amonia}}"
                                                                    data-nitrito="{{$param->nitrito}}"
                                                                    data-nitrato="{{$param->nitrato}}"
                                                                    data-fosfato="{{$param->fosfato}}"
                                                                    data-silica="{{$param->silica}}"
                                                                    data-aquario="{{$param->aquario->descricao}}"
                                                                    data-toggle="modal"
                                                                    data-target="#detailsParameters">
                        <span class="glyphicon glyphicon-th-list"></span> Detalhes
                    </button>
                </td>
                </tr>
            
            </tbody>
        @endforeach
            </table>
            
        </div>
    </div>
    @include ('parameters.edit')
    @include ('parameters.create')
    @include ('parameters.details')
@stop
