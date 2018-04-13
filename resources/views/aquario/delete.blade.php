<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="{{ action('AquarioController@store') }}" method="POST">
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

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Adicionar</button>
                            <a href="{{ action('AquarioController@index') }}" class="btn btn-primary">Voltar</a>
                        </div>
                    </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="title"></span> ?
            <span class="hidden id"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>