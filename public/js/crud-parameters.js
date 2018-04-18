$(document).ready(function() {
  $(document).on('click', '.edit-modal', function() {
    $("#id").val($(this).data("id"));
    $("#data").val($(this).data("param"));
    $("#ph").val($(this).data("ph"));
    $("#salinidade").val($(this).data("salinidade"));
    $("#calcio").val($(this).data("calcio"));
    $("#magnesio").val($(this).data("magnesio"));
    $("#reserva_alcalina").val($(this).data("reserva_alcalina"));
    $("#amonia").val($(this).data("amonia"));
    $("#nitrito").val($(this).data("nitrito"));
    $("#nitrato").val($(this).data("nitrato"));
    $("#fosfato").val($(this).data("fosfato"));
    $("#silica").val($(this).data("silica"));
    $('#editParameters').modal('show');
});

  $(document).on('click', '.details-modal', function() {
    $("#p_data").text($(this).data('param'));
    $('#p_ph').text($(this).data('ph'));
    $('#p_salinidade').text($(this).data('salinidade'));
    $('#p_calcio').text($(this).data('calcio'));
    $('#p_magnesio').text($(this).data('magnesio'));
    $('#p_reserva').text($(this).data('reserva'));
    $('#p_amonia').text($(this).data('amonia'));
    $('#p_nitrito').text($(this).data('nitrito'));
    $('#p_nitrato').text($(this).data('nitrato'));
    $('#p_fosfato').text($(this).data('fosfato'));
    $('#p_silica').text($(this).data('silica'));
    $('#p_aquario').text($(this).data('aquario'));
    $('#detailsParameters').modal('show');
});

$('.modal-footer').on('click', '.edit', function() {
  $.ajax({
      type: 'POST',
      url: '/aquario/parametros/edit',
      data: {
          '_token': $('input[name=_token]').val(),
          'id': $("#id").val(),
          'data': $("#data").val(),
          'ph': $('#ph').val(),
          'salinidade': $('#salinidade').val(),
          'calcio': $('#calcio').val(),
          'magnesio': $('#magnesio').val(),
          'reserva_alcalina': $('#reserva_alcalina').val(),
          'amonia': $('#amonia').val(),
          'nitrito': $('#nitrito').val(),
          'nitrato': $('#nitrato').val(),
          'fosfato': $('#fosfato').val(),
          'silica': $('#silica').val(),
      },
      success: function(data) {
          window.location.href="/aquario/parametros";
      }
  });
});


});