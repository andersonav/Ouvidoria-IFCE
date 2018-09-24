google.charts.load('current', {'packages': ['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Ano', 'Elogios', 'Reclamações', 'Sugestões', 'Teste'],
        ['2014', 1000, 400, 200, 333],
        ['2015', 1170, 460, 250, 332],
        ['2016', 660, 1120, 300, 232],
        ['2017', 1030, 540, 350, 323]
    ]);

    var options = {
//        chart: {
//            title: 'Company Performance',
//            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
//        },
        bars: 'vertical',
        vAxis: {format: 'decimal'},
        height: 500,
        colors: ['#1b9e77', '#d95f02', '#7570b3', 'red']
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));

    chart.draw(data, google.charts.Bar.convertOptions(options));

    var btns = document.getElementById('btn-group');

    btns.onclick = function (e) {

        if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    }
}