/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("input[name=searchById]").keyup(function () {
    var idManifestacao = $(this).val();

    $.ajax({
        type: 'POST',
        url: '/getDataManifestacao',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            idManifestacao: idManifestacao
        }, success: function (data, textStatus, jqXHR) {
            if (data.length > 0) {
                $('.small.modal').modal('show');
            }
        }
    });
});
