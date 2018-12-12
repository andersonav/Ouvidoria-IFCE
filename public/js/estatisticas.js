google.charts.load('current', {'packages': ['bar']});
google.charts.setOnLoadCallback(drawChart);

var arrayAuxColors = [];


function drawChart() {
    var arrayLegends = getLegendsEstatistic();
    var arrayAuxEstatistics = getEstatistics();
    var dataArray = [
        arrayLegends
    ];
    for (var i = 0; i < arrayAuxEstatistics.length; i++) {
        dataArray.push(arrayAuxEstatistics[i]);
    }
    var data = google.visualization.arrayToDataTable(dataArray);
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

function getLegendsEstatistic() {
    var arrayLegends = ['Ano'];
    $.ajax({
        url: "/getLegendsEstatistic",
        type: 'POST',
        async: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data, textStatus, jqXHR) {
            for (var i = 0; i < data.length; i++) {
                arrayLegends.push(data[i].descricaoTipoManifestacao);
                arrayAuxColors.push(data[i].colorTipoManifestacao);
            }
        }
    });
    return arrayLegends;
}

function getEstatistics() {
    var arrayAuxEstatistics = [];
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
    return arrayAuxEstatistics;
}