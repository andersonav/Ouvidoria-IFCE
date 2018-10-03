/* 
 Created on : 03/10/2018, 13:44:41
 Author     : andersonalves
 */
$(document).ready(function () {
    $('.ui.form').form({
        fields: {
//            name: 'empty',
//            gender: 'empty',
//            username: 'empty',
            identificacao: 'empty',
            password: ['empty'],
//            skills: ['minCount[2]', 'empty'],
//            terms: 'checked'
        }});

    $("#btnLogin").click(function () {
        var identificacao = $("input[name=identificacao]").val();
        var password = $("input[name=password]").val();

        $.ajax({
            url: "/login",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                identificacao: identificacao,
                password: password
            }, success: function (data, textStatus, jqXHR) {
                console.log(data);
            }
        });
    });
});