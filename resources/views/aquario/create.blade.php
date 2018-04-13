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
                            <input type="date" name="data_montagem" class="form-control">
                        </div>  

                        <div class="col-sm-4">
                            <label for="largura">Largura</label>
                            <input type="text" name="largura" class="form-control" placeholder="Largura">
                        </div>

                        <div class="col-sm-4">
                            <label for="comprimento">Comprimento</label>
                            <input type="text" name="comprimento" class="form-control" placeholder="Comprimento">
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="altura">Altura</label>
                            <input type="text" id="altura" name="altura" class="form-control" placeholder="Altura">
                        </div>

                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" name="descricao" class="form-control" 
                                placeholder="Descrição">
                        </div>

                         <div class="col-sm-4">
                            <label for="valor">Valor</label>
                            <input type="text" id="valor" name="valor" class="form-control" placeholder="Valor">
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

                    @include('includes.alerts')
                </form>
            </div>
        </div>
    </div>
</div>