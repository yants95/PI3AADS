<!-- Modal -->
<div class="modal fade" id="modalTomadas" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Dados do Aquarios</b></center></h4>
            </div>

            <div class="modal-body">         

                <form class="form-horizontal" action="" method="POST">
                    {!! csrf_field() !!}                    

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" class="form-control" required>
                        </div>  

                    </div>

                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

                </form>
            </div>
        </div>
    </div>
</div>

