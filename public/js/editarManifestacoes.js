/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var table = $('#tableEditManifestacoes').DataTable({
    "lengthChange": false,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
    }
});



function getManifestacoesRespondidas() {
    $.ajax({
        type: 'POST',
        url: '/dadosManifestacoesRespondidas',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, data: {

        },
        success: function (data, textStatus, jqXHR) {
            var html = "";
            for (var i = 0; i < data.length; i++) {
                moment.locale('pt-br');
                var datePergunta = moment(data[i].created_at).format('LLLL');
                html += "<tr><td>" + datePergunta + "</td><td>" + data[i].descricaoTipoManifestacao + "</td><td>" + data[i].mensagemManifestacao + "</td><td>" + data[i].descricaoRespostaManifestacao + "</td><td> <a class='ui tiny yellow icon button actionEdit' data-tooltip='Editar' id='" + data[i].idManifestacao + "'><i class='pencil icon'></i></a><a class='ui tiny red icon button actionDelete' data-tooltip='Deletar' id='" + data[i].idManifestacao + "'><i class='trash icon'></i></a></td></tr>";
            }
            table = $("#tableEditManifestacoes").dataTable().fnDestroy();
            $("#corpoManifestacaoRespondida").html(html);
            table = $('#tableEditManifestacoes').DataTable({
                "lengthChange": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                }
            });

            functionActionEditAndDelete();
        }
    });
}

function functionActionEditAndDelete() {
    $(".actionEdit").click(function () {
        var valorId = $(this).attr("id");
        $.ajax({
            type: 'POST',
            url: '/actionEditManifestacao',
            async: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                idManifestacao: valorId
            }, success: function (data, textStatus, jqXHR) {
                if (data.length > 0) {
                    moment.locale('pt-br');
                    var datePergunta = moment(data[0].created_at).format('LLLL');
                    var dateResposta = moment(data[0].respostaDataCreated).format('LLLL');
                    $(".small.modal .header").html(data[0].descricaoTipoManifestacao + " - " + data[0].assuntoManifestacao);
//                var date = newDate.toDateString();
                    var nomeUsuario = returnNameUser(data[0].idTipoIdentificacaoFk, data[0].nomeUsuario);
                    var pergunta = data[0].mensagemManifestacao;
                    $("#modalRespostaManifestacao #respostaManifestacao").val(data[0].descricaoRespostaManifestacao);
                    $("#modalRespostaManifestacao .content#pergunta .author").html(nomeUsuario);
                    $("#modalRespostaManifestacao .content#pergunta .metadata .date").html(datePergunta);
                    $("#modalRespostaManifestacao .content#pergunta .text").html(pergunta);
                    $("#modalRespostaManifestacao .content#resposta .metadata .date").html(dateResposta);
                    $("#modalRespostaManifestacao .btnEditar").attr("id", valorId);
                    $('#modalRespostaManifestacao').modal('show');
                }
            }
        });
    });

    $(".actionDelete").click(function () {
        var valorId = $(this).attr("id");
        swal({
            title: 'Você confirma esta operação?',
            text: "Essa operação não poderá ser revestida!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, eu desejo!'
        }).then((result) => {
            if (result.value) {
                if (functionDeleteManifestacao(valorId)) {
                    swal(
                            'Apagado!',
                            'Esse dado foi removido com sucesso.',
                            'success'
                            )
                    getManifestacoesRespondidas();
                }

            }
        });


    });


}


function functionDeleteManifestacao(valorId) {
    var boolean = true;
    $.ajax({
        type: 'POST',
        url: '/actionDeleteManifestacao',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            idManifestacao: valorId
        }, success: function (data, textStatus, jqXHR) {
            boolean = true;
        }
    });
    return  boolean;
}
$(".btnEditar").click(function () {
    var valorId = $(this).attr("id");
    var respostaManifestacao = $("#respostaManifestacao").val();

    if (respostaManifestacao == "") {
        $("#divRespostaManifestacao").addClass("error");
    } else {
        $("#divRespostaManifestacao").removeClass("error");
        $.ajax({
            type: 'POST',
            url: '/actionEditWhenClick',
            async: true,
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
                getManifestacoesRespondidas();
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

getManifestacoesRespondidas();
