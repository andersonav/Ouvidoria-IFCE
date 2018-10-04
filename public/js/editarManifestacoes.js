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

$(".actionEditar").click(function () {
    var valorId = $(this).attr("id");
    console.log(valorId);
    $('#modalRespostaManifestacao').modal('show');
});

