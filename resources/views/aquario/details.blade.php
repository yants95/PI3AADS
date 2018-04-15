<!-- Modal -->
<div class="modal fade" id="detailsModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Detalhes do aquário</b></center></h4>
            </div>

            <div class="modal-body">         

                <form class="form-horizontal">
                    {!! csrf_field() !!}
                    
                    

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem:</label> 
                            <input type="date" id="dt_montagem" id="dt_montagem" name="dt_montagem" class="form-control" disabled>
                        </div>  

                        <div class="col-sm-4">
                            <label for="largura">Largura</label>
                            <input type="text" id="aq_largura" name="aq_largura" class="form-control" disabled>
                        </div>

                        <div class="col-sm-4">
                            <label for="comprimento">Comprimento</label>
                            <input type="text" id="aq_comprimento" name="aq_comprimento" class="form-control" disabled>
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="altura">Altura</label>
                            <input type="text" id="aq_altura" name="aq_altura" class="form-control" disabled>
                        </div>

                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="aq_descricao" name="aq_descricao" class="form-control" disabled>
                        </div>

                         <div class="col-sm-4">
                            <label for="valor">Valor</label>
                            <input type="text" id="aq_valor" name="aq_valor" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="data_desmontagem">Data de desmontagem</label>
                            <input type="date" id="dt_desmontagem" name="dt_desmontagem" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>