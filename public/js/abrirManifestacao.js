/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('.menu .item').tab();
$('.checkbox').checkbox('check');
$('select').dropdown();

$('.ui.toggle').checkbox({
    onChecked: function () {
        $('.dadosPessoais').transition('slide down');
    },
    onUnchecked: function () {
        $('.dadosPessoais').transition('slide down');
    }
});

$("input[name=identificacao]").keyup(function () {
    var identificacao = $(this).val();
    $.ajax({
        type: 'POST',
        url: '/getDataUsers',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            identificacao: identificacao
        }, success: function (data, textStatus, jqXHR) {
            var json = JSON.parse(data);
            if (json.status == 200) {
                $("input[name=nome]").val(json.data.message[0].nome);
                $("input[name=setor]").val(json.data.message[0].curso);
                $("input[name=email]").val(json.data.message[0].email);
                $("#formAbrirManifestacao .dadosPessoais #camposCatracas").each(function () {
                    if ($(this).val() == "") {
                        $(this).val("");
                        $(this).removeAttr("readonly");
                    } else {
                        $(this).attr("readonly", true);
                    }
                });
            }
        }
    });

});


$("#btnEnviar").click(function () {
    var dadosFormulario = $("#formAbrirManifestacao").serialize();
    $(".carregando").addClass('active');//loader
    $.ajax({
        url: "/logicAbrirManifestacao",
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: dadosFormulario,
        success: function (data, textStatus, jqXHR) {
            $(".field").each(function () {
                $(this).removeClass("error");
            });
            $(".errors").css("display", "none");
//            $("#mensagemRetorno").addClass("positive");
//            $("#mensagemRetorno .header").html("Manifestação realizada com sucesso");
//            $("#mensagemRetorno p").html("ID da manifestação: <b>00000" + data.last_insert_id + "</b>. <br><b>Obs</b>: Este ID será utilizado para consultar sua manifestação na aba de <b>Buscar Manifestação</b>.");
//            $(".errors").css("display", "block");

            $("#formAbrirManifestacao input:visible").each(function () {
                $(this).val("");
            });
            $(".carregando").removeClass('active');//loader
            $('select').dropdown('restore defaults');
            $("textarea[name=descricaoMensagem]").val("");
//            $('.message .close').on('click', function () {
//                $(this).closest('.message').transition('fade');
//            });
            swal({
                title: '<strong>Manifestação realizada com sucesso!</strong>',
                type: 'success',
                html:
                        'Identificação da manifestação: ' + data.last_insert_id + '.<br>' +
                        '<b>Obs:</b>Esta identificação será utilizada para consultar sua manifestação na aba de <b>Buscar Manifestação</b>.',
                showCloseButton: true,
//                confirmButtonText:
//                        '<i class="fa fa-thumbs-up"></i> Great!',
//                confirmButtonAriaLabel: 'Thumbs up, great!',
//                cancelButtonText:
//                        '<i class="fa fa-thumbs-down"></i>',
            })
        }, error: function (errors, textStatus, errorThrown) {
            $(".carregando").removeClass('active');//loader
            $(".field").removeClass("error");
            $.each(errors.responseJSON, function (key, value) {
//                $('.errors').append('<div class="ui negative message"> <i class="close icon"></i><div class="header">' + value + '</div></div>');
                $(".field." + key).addClass("error");
            });
            $('.message .close').on('click', function () {
                $(this).closest('.message').transition('fade');
            });
            $("#mensagemRetorno").removeClass("positive");
            $("#mensagemRetorno").addClass("negative");
            $("#mensagemRetorno .header").html("Preencha os campos obrigatórios");
            $("#mensagemRetorno p").html("");
            $(".errors").css("display", "block");
        }
    });
});