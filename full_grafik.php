<html>
<head>
    <title>Demo</title>
</head>
<body>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
<script src="https://code.highcharts.com/highcharts.js"></script>
<style>
body {
    font-family: Arial, Verdana, sans-serif;
}
</style>
<div id="container" style="height:400px"></div>
<div id="container1" style="height:400px"></div>
<div id="container2" style="height:400px"></div>
<div id="container3" style="height:400px"></div>
<div id="container4" style="height:400px"></div>
<script>
$(document).ready(function(){
$(function () {
    var chart = Highcharts.chart('container4', {
        chart: {
            type: 'column'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        title: {
            text: 'Contoh Title Bedjo',
            align: 'center',
            x: 0
        },
        colors: ['#cc113c', '#f7941d', '#4ec4ce', '#d24087'],
        series: [{
            data: [10, 30.8, 50.4, 129.2, 144.0, 176.0, 85.6],
            name: "Tahun 2013"
             
        },
        {
            data: [20, 25.7, 60.4, 140.2, 124.0, 166.0, 95.6],
            name: "Tahun 2014"
        },
        {
            data: [30, 40.6, 55.4, 110.2, 134.0, 146.0, 115.6],
            name: "Tahun 2015"
        },
        {
            data: [15, 35.7, 70.4, 109.2, 154.0, 136.0, 125.6],
            name: "Tahun 2016"
        }]
    });
 
    // the button action
    $('#button').click(function () {
        var selectedPoints = chart.getSelectedPoints();
 
        if (chart.lbl) {
            chart.lbl.destroy();
        }
        chart.lbl = chart.renderer.label('You selected ' + selectedPoints.length + ' points', 100, 60)
            .attr({
                padding: 10,
                r: 5,
                fill: Highcharts.getOptions().colors[1],
                zIndex: 5
            })
            .css({
                color: 'white'
            })
            .add();
    });
});
 
$(function () {
     
    var chart = Highcharts.chart('container3', {
        chart: {
            type: 'pie'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }]
    });
 
    // the button action
    $('#button').click(function () {
        var selectedPoints = chart.getSelectedPoints();
 
        if (chart.lbl) {
            chart.lbl.destroy();
        }
        chart.lbl = chart.renderer.label('You selected ' + selectedPoints.length + ' points', 10, 10)
            .attr({
                padding: 10,
                r: 5,
                fill: Highcharts.getOptions().colors[1],
                zIndex: 5
            })
            .css({
                color: 'white'
            })
            .add();
    });
});
 
$(function () {
    Highcharts.chart('container2', {
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
 
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
 
        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }, {
            data: [144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2]
        },{
            data: [154.0, 146.0, 125.6, 158.5, 206.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2]
        }
        ]
    });
});
$(function () {
    Highcharts.chart('container1', {

        title: {
            text: 'Step line types, with null values in the series'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        series: [{
            data: [1, 2, 3, 4, null, 6, 7, null, 9],
            step: 'right',
            name: 'Right'
        }, {
            data: [5, 6, 7, 8, null, 10, 11, null, 13],
            step: 'center',
            name: 'Center'
        }, {
            data: [9, 10, 11, 12, null, 14, 15, null, 17],
            step: 'left',
            name: 'Left'
        }]
 
    });
});
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
 
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
 
        series: [{
            data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }, {
            data: [144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4, 129.2]
        }],
 
        tooltip: {
            pointFormat: '{series.name}: &lt;b&gt;{point.y}&lt;/b&gt; ({point.percentage:.1f}%)&lt;br/&gt;'
        }
    });
});
});
</script>
</body>
</html>