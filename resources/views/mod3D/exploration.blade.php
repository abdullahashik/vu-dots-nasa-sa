<html>
<head>
    <script src="{{url('js/jquery.js')}}"></script>
    <link href="{{url('css/style.css')}}" rel="stylesheet"/>
    <style type="text/css">

        #container {
            height: 500px;
            min-width: 310px;
            max-width: 800px;
            margin: 0 auto;
        }
        .loading {
            margin-top: 10em;
            text-align: center;
            color: gray;
        }
        rect{
            fill: none !important;
        }
    </style>

</head>

<body>
<div id="container"></div>


<script type="text/javascript">
    $(function () {

        var H = Highcharts,
                map = H.maps['countries/us/us-all'],
                chart;


        // Add series with state capital bubbles
        $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=us-capitals.json&callback=?', function (json) {
            var data = [];
            $.each(json, function () {
                this.z = this.population;
                data.push(this);
            });

            $('#container').highcharts('Map', {

                title: {
                    text: 'Geotagging on America'
                },

                tooltip: {
                    pointFormat: '{point.capital}, {point.parentState}<br>' +
                    'Lat: {point.lat}<br>' +
                    'Lon: {point.lon}<br>' +
                    'Population: {point.population}'
                },

                xAxis: {
                    crosshair: {
                        zIndex: 5,
                        dashStyle: 'dot',
                        snap: false,
                        color: 'gray'
                    }
                },

                yAxis: {
                    crosshair: {
                        zIndex: 5,
                        dashStyle: 'dot',
                        snap: false,
                        color: 'gray'
                    }
                },

                series: [{
                    name: 'Basemap',
                    mapData: map,
                    borderColor: '#606060',
                    nullColor: 'rgba(200, 200, 200, 0.2)',
                    showInLegend: false
                }, {
                    name: 'Separators',
                    type: 'mapline',
                    data: H.geojson(map, 'mapline'),
                    color: '#101010',
                    enableMouseTracking: false,
                    showInLegend: false
                }, {
                    type: 'mapbubble',
                    dataLabels: {
                        enabled: true,
                        format: '{point.capital}'
                    },
                    name: 'Cities',
                    data: data,
                    maxSize: '12%',
                    color: H.getOptions().colors[0]
                }]
            });

            chart = $('#container').highcharts();
        });

        // Display custom label with lat/lon next to crosshairs
        $('#container').mousemove(function (e) {
            var position;

            if (chart) {
                if (!chart.lab) {
                    chart.lab = chart.renderer.text('', 0, 0)
                            .attr({
                                zIndex: 5
                            })
                            .css({
                                color: '#505050'
                            })
                            .add();
                }

                e = chart.pointer.normalize(e);
                position = chart.fromPointToLatLon({
                    x: chart.xAxis[0].toValue(e.chartX),
                    y: chart.yAxis[0].toValue(e.chartY)
                });

                chart.lab.attr({
                    x: e.chartX + 5,
                    y: e.chartY - 22,
                    text: 'Lat: ' + position.lat.toFixed(2) + '<br>Lon: ' + position.lon.toFixed(2)
                });
            }
        });

        $('#container').mouseout(function () {
            if (chart && chart.lab) {
                chart.lab.destroy();
                chart.lab = null;
            }
        });
    });

</script>
<script src="{{url('js/proj4.js')}}"></script>
<script src="{{url('js/highmaps.js')}}"></script>
<script src="{{url('js/exporting.js')}}"></script>
<script src="{{url('js/us-all.js')}}"></script>
</body>

</html>