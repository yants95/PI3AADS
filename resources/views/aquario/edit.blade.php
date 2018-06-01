<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Editar aquário</b></center></h4>
            </div>

            <div class="modal-body">         

                <form class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem</label>
                            <input type="date" id="data_montagem" name="data_montagem" class="form-control">
                        </div>  

                        <div class="col-sm-4">
                            <label for="largura">Largura</label>
                            <input type="text" id="largura" name="largura" class="form-control">
                        </div>

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

                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao_edit" name="descricao" class="form-control">
                        </div>

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
                        <button type="submit" class="edit btn btn-primary">Atualizar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>