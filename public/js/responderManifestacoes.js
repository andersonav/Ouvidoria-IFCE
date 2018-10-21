/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var table = $('#tabela').DataTable({
    "lengthChange": false,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
    }
});

$(".actionResponder").click(function () {
    var valorId = $(this).attr("id");
    $.ajax({
        type: 'POST',
        url: '/getDataManifestacaoToResponderManifestacao',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            idManifestacao: valorId
        }, success: function (data, textStatus, jqXHR) {
            if (data.length > 0) {
                moment.locale('pt-br');
                var datePergunta = moment(data[0].created_at).format('LLLL');
                $(".small.modal .header").html(data[0].descricaoTipoManifestacao + " - " + data[0].assuntoManifestacao);
//                var date = newDate.toDateString();
                var nomeUsuario = returnNameUser(data[0].idTipoIdentificacaoFk, data[0].nomeUsuario);
                var pergunta = data[0].mensagemManifestacao;
                $("#modalRespostaManifestacao .content#pergunta .author").html(nomeUsuario);
                $("#modalRespostaManifestacao .content#pergunta .metadata .date").html(datePergunta);
                $("#modalRespostaManifestacao .content#pergunta .text").html(pergunta);
                $('#modalRespostaManifestacao').modal('show');
            }
        }
    });
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

