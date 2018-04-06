@extends('adminlte::page')

@section('title', 'Aquários')

@section('content_header')
    <h1>Aquários</h1>

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
                    <td><a href="{{ action('AquarioController@edit', $row['id']) }}" class="btn btn-primary">Editar</a></td>
                    <td><a href="" class="btn btn-warning">Detalhes</a></td>
                </tr>
            @endforeach
            </tbody>
            </table>
            {!! $aquario->render() !!}
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dados do Aquarios</h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" id="formulario_clientes" action="{{ route('add.aquario') }}" method="POST">
                    {!! csrf_field() !!}
                    
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem</label>
                            <input type="date" id="data_montagem" name="data_montagem" class="form-control">
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

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Dados do Aquarios</h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" id="formulario_clientes" action="{{ route('add.aquario') }}" method="POST">
                    {!! csrf_field() !!}
                    
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem</label>
                            <input type="date" id="data_montagem" name="data_montagem" class="form-control">
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

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    @stop
