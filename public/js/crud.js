$(document).on('click', '.edit-modal', function() {
    $('#id').val($(this).data('id'));
    $('#data_montagem').val($(this).data('montagem'));
    $('#largura').val($(this).data('largura'));
    $('#altura').val($(this).data('altura'));
    $('#comprimento').val($(this).data('comprimento'));
    $('#descricao').val($(this).data('descricao'));
    $('#valor').val($(this).data('valor'));
    $('#data_desmontagem').val($(this).data('desmontagem'));
    $('#editModal').modal('show');
});
  $('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'post',
      url: '/aquario/edit',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#id").val(),
          'data_montagem': $("#data_montagem").val(),
          'largura': $('#largura').val(),
          'altura': $('#altura').val(),
          'comprimento': $('#comprimento').val(),
          'descricao': $('#descricao').val(),
          'valor': $('#valor').val(),
          'data_desmontagem': $('#data_desmontagem').val()
      },
      success: function(data) {
          window.location.href="/aquario";
      }
  });
});
