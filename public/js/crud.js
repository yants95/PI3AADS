$(document).ready(function() {
    $(document).on('click', '.add-modal', function() {
        $('.modal-title').text('Add');
        $('#addModal').modal('show');
    });
    $('.add').on('click', function() {
        $.ajax({
            type: 'POST',
            url: '/aquario',
            data: {
                '_token': $('input[name=_token]').val(),
                'data_montagem': $('#data_montagem').val(),
                'largura': $('#largura').val(),
                'comprimento': $('#comprimento').val(),
                'altura': $('#largura').val(),
                'descricao': $('#descricao').val(),
                'valor': $('#valor').val(),
                'data_desmontagem': $('#data_desmontagem').val(),
            },
            success: function(data) {
                toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
            },
        });
    });
});
        
        