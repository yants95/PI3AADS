@extends('adminlte::page')

@section('title', 'Aquários')

@section('content_header')
    <h1>Aquários</h1>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    

@stop

@section('content')
    <!-- inicio box -->
    <div class="box">
        <div class="box-header">
            <button type="button" class="btn btn-success add-modal">Adicionar Aquarios</button>
        </div>

        <div class="box-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Data de montagem</th>
                        <th>Descrição</th>
                        <th>Dimensão</th>
                        <th>Ativo</th>
                        <th>Ações</th>
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
                        <td><button class="edit-modal btn btn-primary">
                            <span class="glyphicon glyphicon-edit"></span> Editar
                            </button>
                            <button class="edit-modal btn btn-warning">
                            <span class="glyphicon glyphicon-th-list"></span> Detalhes
                            </button>
                        </td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $aquario->render() !!}
        </div>
    </div><!-- fim box -->

    <!-- Modal form to add a post -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{ action('AquarioController@store') }}" method="POST">
                        <div class="col-md-12">
                            <div class="col-sm-4">
                                <label for="data_montagem">Data de montagem</label>
                                <input type="date" value="" name="data_montagem" class="form-control">
                            </div>  
                            
                            <div class="col-sm-4">
                                <label for="largura">Largura</label>
                                <input type="text" name="largura" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label for="comprimento">Comprimento</label>
                                <input type="text" name="comprimento" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="altura">Altura</label>
                                <input type="text" name="altura" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao" class="form-control">
                            </div>

                            <div class="col-sm-4">
                                <label for="valor">Valor</label>
                                <input type="text" name="valor" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="data_desmontagem">Data de desmontagem</label>
                                <input type="date" name="data_desmontagem" class="form-control">
                            </div>
                        </div>

                    </form><br>

                    <div class="form-group">
                        <center><button type="submit" name="add" class="btn btn-success add">
                            <span id="" class='glyphicon glyphicon-check'></span> Adicionar
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Fechar
                        </button></center>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fim modal form add-->

    <!-- Modal form to show a post -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- fim modal form show -->

    <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                <form class="form-horizontal">
                        {!! csrf_field() !!}
                        
                        <div class="col-md-12">
                            <div class="col-sm-4">
                                <label for="data_montagem">Data de montagem</label>
                                <input type="date" id="data_montagem" value="" name="data_montagem" class="form-control">
                            </div>  
                        </div>
                        
                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="largura">Largura</label>
                                <input type="text" id="largura" name="largura" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="comprimento">Comprimento</label>
                                <input type="text" id="comprimento" name="comprimento" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="altura">Altura</label>
                                <input type="text" id="altura" name="altura" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="descricao">Descrição</label>
                                <input type="text" id="descricao" name="descricao" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="valor">Valor</label>
                                <input type="text" id="valor" name="valor" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12"><br>
                            <div class="col-sm-4">
                                <label for="data_desmontagem">Data de desmontagem</label>
                                <input type="date" id="data_desmontagem" name="data_desmontagem" class="form-control">
                            </div>
                        </div>

                        <input type="hidden" name="id" id="id" value="" />
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/crud.js') }}"></script>


@stop