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
                            <label id="dt_montagem" name="dt_montagem" style="font-weight: normal;"></label>
                        </div>  

                        <div class="col-sm-4">
                            <label for="largura">Largura:</label> 
                            <label id="aq_largura" name="aq_largura" style="font-weight: normal;"></label>
                        </div>  

                        <div class="col-sm-4">
                            <label for="data_montagem">Comprimento:</label> 
                            <label id="aq_comprimento" name="aq_comprimento" style="font-weight: normal;"></label>
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="altura">Altura:</label> 
                            <label id="aq_altura" name="aq_altura" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="descricao">Descrição:</label> 
                            <label id="aq_descricao" name="aq_descricao" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="valor">Valor:</label> 
                            <label id="aq_valor" name="aq_valor" style="font-weight: normal;"></label>
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="data_desmontagem">Data de desmontagem:</label> 
                            <label id="dt_desmontagem" name="dt_desmontagem" style="font-weight: normal;"></label>
                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>