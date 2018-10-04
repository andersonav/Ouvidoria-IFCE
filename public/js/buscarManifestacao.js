/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#searchById").click(function () {
    var idManifestacao = $("#inputSearchId").val();
    console.log("TEste");
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
                var newDate = new Date(data[0].created_at).toUTCString();
                $(".small.modal .header").html(data[0].descricaoTipoManifestacao + " - " + data[0].assuntoManifestacao);
//                var date = newDate.toDateString();
                var nomeUsuario = returnNameUser(data[0].idTipoIdentificacaoFk, data[0].nomeUsuario);

                $("#modalBuscarManifestacao .content#pergunta .author").html(nomeUsuario);
                $("#modalBuscarManifestacao .content#pergunta .metadata .date").html(newDate);
                $('#modalBuscarManifestacao').modal('show');
            }
        }
    });
});

$("#inputSearchId").keyup(function (e) {
    if (e.keyCode == 13) {
        $("#searchById").trigger('click');
    }
});

function returnNameUser(idTipoIdentificacaoFk, nome) {
    var nomeUsuario = "";
    if (idTipoIdentificacaoFk == 1) {
        nomeUsuario = nome;
    } else {
        nomeUsuario = "Anônimo";
    }
    return nomeUsuario;
}