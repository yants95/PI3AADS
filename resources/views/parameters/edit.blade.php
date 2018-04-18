<!-- Modal -->
<div class="modal fade" id="editParameters" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Editar parâmetros do aquário</b></center></h4>
            </div>

            <div class="modal-body">         

                <form class="form-horizontal">
                    {!! csrf_field() !!}                    

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="data">Data</label>
                            <input type="date" name="data" id="data" class="form-control" >
                        </div>  

                        <div class="col-sm-4">
                            <label for="PH">PH</label>
                            <input type="text" name="ph" id="ph" class="form-control" placeholder="PH" >
                        </div>

                        <div class="col-sm-4">
                            <label for="salinidade">Salinidade</label>
                            <input type="text" name="salinidade" id="salinidade" class="form-control" placeholder="Salinidade" >
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="calcio">Cálcio</label>
                            <input type="text" id="calcio" name="calcio" id="calcio" class="form-control" placeholder="Cálcio" >
                        </div>

                        <div class="col-sm-4">
                            <label for="magnesio">Magnésio</label>
                            <input type="text" id="magnesio" name="magnesio" id="magnesio" placeholder="Magnésio" class="form-control" placeholder="Descrição" >
                        </div>

                         <div class="col-sm-4">
                            <label for="reserva_alcalina">Reserva Alcalina</label>
                            <input type="text" id="reserva_alcalina" name="reserva_alcalina" id="reserva_alcalina" class="form-control" placeholder="Reserva Alcalina" >
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="amonia">Amônia</label>
                            <input type="text" id="amonia" name="amonia" placeholder="Amônia" id="amonia" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label for="nitrito">Nitrito</label>
                            <input type="text" id="nitrito" name="nitrito" placeholder="Nitrato" id="nitrito" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label for="nitrato">Nitrato</label>
                            <input type="text" id="nitrato" name="nitrato" placeholder="Nitrato" id="nitrato" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="fosfato">Fosfato</label>
                            <input type="text" id="fosfato" name="fosfato" placeholder="Fosfato" id="fosfato" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <label for="silica">Silica</label>
                            <input type="text" id="silica" name="silica" placeholder="Silica" id="silica" class="form-control">
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