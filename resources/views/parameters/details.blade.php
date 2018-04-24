<!-- Modal -->
<div class="modal fade" id="detailsParameters" role="dialog">
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
                            <label for="data">Data:</label> 
                            <label id="p_data" name="p_data" style="font-weight: normal;"></label>
                        </div>  

                        <div class="col-sm-4">
                            <label for="ph">PH:</label> 
                            <label id="p_ph" name="p_ph" style="font-weight: normal;"></label>
                        </div>  

                        <div class="col-sm-4">
                            <label for="salinidade">Salinidade:</label> 
                            <label id="p_salinidade" name="p_salinidade" style="font-weight: normal;"></label>
                        </div>
                    </div>
                    
                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="calcio">Cálcio:</label> 
                            <label id="p_calcio" name="p_calcio" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="magnesio">Magnésio:</label> 
                            <label id="p_magnesio" name="p_magnesio" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="reserva">Reserva Alcalina:</label> 
                            <label id="p_reserva" name="p_reserva" style="font-weight: normal;"></label>
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="amonia">Amônia:</label> 
                            <label id="p_amonia" name="p_amonia" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="nitrito">Nitrito:</label> 
                            <label id="p_nitrito" name="p_nitrito" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="nitrato">Nitrato:</label> 
                            <label id="p_nitrato" name="p_nitrato" style="font-weight: normal;"></label>
                        </div>
                    </div>

                    <div class="col-md-12"><br>
                        <div class="col-sm-4">
                            <label for="fosfato">Fosfato:</label> 
                            <label id="p_fosfato" name="p_fosfato" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="silica">Silica:</label> 
                            <label id="p_silica" name="p_silica" style="font-weight: normal;"></label>
                        </div>

                        <div class="col-sm-4">
                            <label for="aquario">Aquário:</label> 
                            <label id="p_aquario" name="p_aquario" style="font-weight: normal;"></label>
                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>