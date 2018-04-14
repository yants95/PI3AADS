<!-- Modal -->
<div class="modal fade" id="detailsModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Detalhes do aquário</b></center></h4>
            </div>

            <div class="modal-body">         

<<<<<<< HEAD
                <form class="form-horizontal">                 

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem</label>
                            <input type="date" id="data_montagem" name="data_montagem" class="form-control" disabled>
=======
                <form class="form-horizontal">
                    {!! csrf_field() !!}
                    
                    

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data_montagem">Data de montagem:</label> 
                            <input type="date" id="dt_montagem" id="dt_montagem" name="dt_montagem" class="form-control" disabled>
>>>>>>> dev
                        </div>  

                        <div class="col-sm-4">
                            <label for="largura">Largura</label>
<<<<<<< HEAD
                            <input type="text" id="largura" name="largura" class="form-control" disabled>
=======
                            <input type="text" id="aq_largura" name="aq_largura" class="form-control" disabled>
>>>>>>> dev
                        </div>

                        <div class="col-sm-4">
                            <label for="comprimento">Comprimento</label>
<<<<<<< HEAD
                            <input type="text" id="comprimento" name="comprimento" class="form-control" disabled>
=======
                            <input type="text" id="aq_comprimento" name="aq_comprimento" class="form-control" disabled>
>>>>>>> dev
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="altura">Altura</label>
<<<<<<< HEAD
                            <input type="text" id="altura" name="altura" class="form-control" disabled>
=======
                            <input type="text" id="aq_altura" name="aq_altura" class="form-control" disabled>
>>>>>>> dev
                        </div>

                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
<<<<<<< HEAD
                            <input type="text" id="descricao" name="descricao" class="form-control" disabled>
=======
                            <input type="text" id="aq_descricao" name="aq_descricao" class="form-control" disabled>
>>>>>>> dev
                        </div>

                         <div class="col-sm-4">
                            <label for="valor">Valor</label>
<<<<<<< HEAD
                            <input type="text" id="valor" name="valor" class="form-control" disabled>
=======
                            <input type="text" id="aq_valor" name="aq_valor" class="form-control" disabled>
>>>>>>> dev
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="data_desmontagem">Data de desmontagem</label>
<<<<<<< HEAD
                            <input type="date" id="data_desmontagem" name="data_desmontagem" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        
=======
                            <input type="date" id="dt_desmontagem" name="dt_desmontagem" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="modal-footer">

>>>>>>> dev
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>