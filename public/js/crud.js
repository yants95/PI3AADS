$(document).ready(function() {
  $(document).on('click', '.edit-modal', function() {
    $('#id').val($(this).data('id'));
    $('#data_montagem').val($(this).data('montagem'));
    $('#largura').val($(this).data('largura'));
    $('#altura').val($(this).data('altura'));
    $('#comprimento').val($(this).data('comprimento'));
    $('#descricao_edit').val($(this).data('descricao'));
    $('#valor').val($(this).data('valor'));
    $('#data_desmontagem').val($(this).data('desmontagem'));
    $('#editModal').modal('show');
});

  $(document).on('click', '.details-modal', function() {
    $("#dt_montagem").text($(this).data('dt_montagem'));
    $('#aq_largura').text($(this).data('largura'));
    $('#aq_comprimento').text($(this).data('comprimento'));
    $('#aq_altura').text($(this).data('altura'));
    $('#aq_descricao').text($(this).data('descricao'));
    $('#aq_valor').text($(this).data('valor'));
    $('#dt_desmontagem').text($(this).data('desmontagem'));
    $('#detailsModal').modal('show');
});

$('.modal-footer').on('click', '.edit', function(e) {
  e.preventDefault(); 
  $.ajax({
      type: 'POST',
      url: '/aquario/edit',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#id").val(),
          'data_montagem': $("#data_montagem").val(),
          'largura': $('#largura').val(),
          'altura': $('#altura').val(),
          'comprimento': $('#comprimento').val(),
          'descricao': $('#descricao_edit').val(),
          'valor': $('#valor').val(),
          'data_desmontagem': $('#data_desmontagem').val()
      },
      success: function(data) {
    	  
      }
  });
});


});