google.charts.load('current', {'packages': ['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {


    var arrayAux = ['Ano'];
    var arrayAuxColors = [];
    var arrayAuxEstatistics = [];
    $.ajax({
        url: "/getLegendsEstatistic",
        type: 'POST',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            for (var i = 0; i < data.length; i++) {
                arrayAux.push(data[i].descricaoTipoManifestacao);
                arrayAuxColors.push(data[i].colorTipoManifestacao);
            }
        }
    });

    $.ajax({
        url: "/getEstatistics",
        type: 'POST',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            var contador = 0;
            for (var i = 0; i < data.length; i++) {
                arrayAuxEstatistics[contador] = ["" + data[i].ano + "", data[i].denuncia, data[i].reclamacao, data[i].sugestao, data[i].elogio, data[i].informacao];
                contador++;
            }
        }
    });
    var data = google.visualization.arrayToDataTable([
        arrayAux,
//        ['2014', 1000, 400, 200, 333],
//        ['2015', 1170, 460, 250, 332],
        arrayAuxEstatistics[0],
        arrayAuxEstatistics[1]
    ]);

    var options = {
//        chart: {
//            title: 'Company Performance',
//            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
//        },
        bars: 'vertical',
        vAxis: {format: 'decimal'},
        height: 500,
        colors: arrayAuxColors
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));

    chart.draw(data, google.charts.Bar.convertOptions(options));

}