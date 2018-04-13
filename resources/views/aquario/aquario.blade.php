@extends('adminlte::page')

@section('title', 'Aquários')

@section('content_header')
    <h1>Aquários</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <script src="js/crud.js"></script>
    

@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Adicionar Aquarios</button>
        </div>
        <div class="box-body">


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Data de montagem</th>
                        <th>Descrição</th>
                        <th>Dimensão</th>
                        <th>Ativo</th>
                    </tr>
                </thead>
            <tbody>
            @foreach($aquario as $row)
                <tr>
                    <td>{{ $row->data_montagem }}</td>
                    <td>{{ $row->descricao }}</td>
                    <td>{{ ($row->largura * $row->altura * $row->comprimento) / 1000 }}</td>
                    <td>
                        @if ($row->data_desmontagem)
                            Não
                        @else
                            Sim
                        @endif
                    </td>
                    <td>
                    <button class="edit-modal btn btn-primary" data-id="{{$row->id}}"
                                                               data-montagem="{{$row->data_montagem}}"
                                                               data-descricao="{{$row->descricao}}"
                                                               data-altura="{{$row->altura}}"
                                                               data-largura="{{$row->largura}}"
                                                               data-comprimento="{{$row->comprimento}}"
                                                               data-valor="{{$row->valor}}" 
                                                               data-desmontagem="{{$row->data_desmontagem}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            {!! $aquario->render() !!}
        </div>
    </div>

        @include('aquario.edit')
        @include('aquario.create')
@stop
