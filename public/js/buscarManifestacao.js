/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#searchById").click(function () {
    var idManifestacao = $("#inputSearchId").val();
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
                moment.locale('pt-br');
                var datePergunta = moment(data[0].created_at).format('LLLL');
                var dateResposta = moment(data[0].respostaDataCreated).format('LLLL');
                $(".small.modal .header").html(data[0].descricaoTipoManifestacao + " - " + data[0].assuntoManifestacao);
//                var date = newDate.toDateString();
                var nomeUsuario = returnNameUser(data[0].idTipoIdentificacaoFk, data[0].nomeUsuario);
                var pergunta = data[0].mensagemManifestacao;
                var arrayResposta = returnRespostaUser(data[0].idTipoRespostaManifestacaoFk, data[0].descricaoRespostaManifestacao, dateResposta);
                $("#modalBuscarManifestacao .content#pergunta .author").html(nomeUsuario);
                $("#modalBuscarManifestacao .content#pergunta .metadata .date").html(datePergunta);
                $("#modalBuscarManifestacao .content#pergunta .text").html(pergunta);
                $("#modalBuscarManifestacao .content#respostaCampus .metadata").html(arrayResposta.dataResposta);
                $("#modalBuscarManifestacao .content#respostaCampus .text").html(arrayResposta.mensagemResposta);
                $('#modalBuscarManifestacao').modal('show');
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Nenhuma manifestação foi encontrada com esse número!'
                })
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

function returnRespostaUser(idTipoRespostaFk, descricaoRespostaManifestacao, dataCreatedResposta) {
    var retorno = {};
    if (idTipoRespostaFk == 2) {
        retorno = {
            'mensagemResposta': 'A sua resposta ainda está sendo analisada.',
            'dataResposta': ''
        };
    } else {
        retorno = {
            'mensagemResposta': descricaoRespostaManifestacao,
            'dataResposta': dataCreatedResposta
        };
    }
    return retorno;
}