@extends('adminlte::page')

@section('title', 'Editar aquário')

@section('content_header')
    <h1>Editar aquário</h1>

@stop

@section('content')      

                @section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form class="form-horizontal" action="{{ action('AquarioController@update', $id) }}" method="POST">
                    {!! csrf_field() !!}
                    
                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem</label>
                            <input type="date" id="data_montagem" name="data_montagem" class="form-control" value="{{$aquario->data_montagem}}">
                        </div>  
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="largura">Largura</label>
                            <input type="text" id="largura" name="largura" class="form-control" value="{{$aquario->largura}}">
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="comprimento">Comprimento</label>
                            <input type="text" id="comprimento" name="comprimento" class="form-control" value="{{$aquario->comprimento}}">
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="altura">Altura</label>
                            <input type="text" id="altura" name="altura" class="form-control" value="{{$aquario->altura}}">
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" name="descricao" class="form-control" value="{{$aquario->descricao}}">
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="valor">Valor</label>
                            <input type="text" id="valor" name="valor" class="form-control" value="{{$aquario->valor}}">
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="data_desmontagem">Data de desmontagem</label>
                            <input type="date" id="data_desmontagem" name="data_desmontagem" class="form-control" value="{{$aquario->data_desmontagem}}">
                        </div>
                    </div>

                    <input type="hidden" name="id" id="id" value="" />

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
    </div>
</div>
@endsection
              

      
    @stop
