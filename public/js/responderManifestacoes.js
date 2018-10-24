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


getManifestacoesRecentes();


function getManifestacoesRecentes() {
    $.ajax({
        type: 'POST',
        url: '/dadosManifestacoesPendentes',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, data: {

        },
        success: function (data, textStatus, jqXHR) {
            var html = "";
            for (var i = 0; i < data.length; i++) {
                moment.locale('pt-br');
                var datePergunta = moment(data[i].created_at).format('LLLL');
                html += "<tr><td>" + datePergunta + "</td><td>" + data[i].descricaoTipoManifestacao + "</td><td>" + data[i].mensagemManifestacao + "</td><td> <a class='ui tiny red icon button actionResponder' data-tooltip='Responder' id='" + data[i].idManifestacao + "'><i class='reply icon'></i></a></td></tr>";
            }
            table.destroy();
            $("#corpoManifestacoesPendentes").html(html);
            table = $('#tabela').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });

            functionActionResponder();
        }
    });
}

function functionActionResponder() {
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
                    $("#modalRespostaManifestacao textarea").val("");
                    $("#modalRespostaManifestacao .content#pergunta .author").html(nomeUsuario);
                    $("#modalRespostaManifestacao .content#pergunta .metadata .date").html(datePergunta);
                    $("#modalRespostaManifestacao .content#pergunta .text").html(pergunta);
                    $("#modalRespostaManifestacao .btnResponder").attr("id", valorId);
                    $('#modalRespostaManifestacao').modal('show');
                }
            }
        });
    });
}


$(".btnResponder").click(function () {
    var valorId = $(this).attr("id");
    var respostaManifestacao = $("#respostaManifestacao").val();

    if (respostaManifestacao == "") {
        $("#divRespostaManifestacao").addClass("error");

    } else {
        $("#divRespostaManifestacao").removeClass("error");
        $.ajax({
            type: 'POST',
            url: '/actionResponderManifestacao',
            async: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                idManifestacao: valorId,
                respostaManifestacao: respostaManifestacao
            }, success: function (data, textStatus, jqXHR) {
                $("#modalRespostaManifestacao").modal('hide');
                $(".divMensagemRetorno").css("display", "block");
                $('.message .close').on('click', function () {
                    $(this).closest('.message').transition('fade');
                });
                getManifestacoesRecentes();
            }
        });
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



