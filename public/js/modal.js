$(document).ready(function() {
    $(document).on('click', '.edit-modal', function() {
        $('#data_montagem').val($(this).data('montagem'));
        $('#largura').val($(this).data('largura'));
        $('#comprimento').val($(this).data('comprimento'));
        $('#altura').val($(this).data('altura'));
        $('#descricao').val($(this).data('descricao'));
        $('#valor').val($(this).data('valor'));
        $('#data_desmontagem').val($(this).data('desmontagem'));
        $('#editModal').modal('show');
    });
});