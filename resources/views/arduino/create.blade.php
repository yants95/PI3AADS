<!-- Modal -->
<div class="modal fade" id="createArduino" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center><b>Dados do Aquarios</b></center></h4>
            </div>

            <div class="modal-body">     
                <form class="form-horizontal" action="{{ route('add.arduino') }}" method="POST">
                    {!! csrf_field() !!}                    

                    <div class="col-md-12">
                        <div class="col-sm-4">
                            <label for="ip">IP</label>
                            <input type="text" name="ip" class="form-control" placeholder="IP">
                        </div>  

                        <div class="col-sm-4">
                            <label for="mac">MAC Address</label>
                            <input type="text" name="mac_address" class="form-control" placeholder="MAC Address">
                        </div>

                        <div class="col-sm-4">
                            <label for="aquario">Aquário</label>
                            <select name="aquario" class="form-control">Selecione
                            @foreach (Auth()->user()->aquario as $arduino)
                                <option value="{{ $arduino->id }}">{{ $arduino->descricao }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                    

                    <div class="modal-footer">
                        <div class="row">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

