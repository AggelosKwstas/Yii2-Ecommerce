
$(document).ready(function(){
    makeGraphActive()
    let s= new Date().toLocaleString();
    $('#date-id').text(s);
    var map = L.map('map',{zoomControl:false}).setView([39.6650, 20.8537], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        minZoom:10,
        maxZoom: 17,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var greenIcon = L.icon({
        iconUrl: 'img/newMarker.png',
        iconSize: [30, 40],
        iconAnchor: [20, 35],
        popupAnchor: [0, -30]
    });
    L.marker([39.6650, 20.8537], {icon: greenIcon}).addTo(map).bindPopup('<h3>Station Content</h3>' +
        '' +
        '' +
        '' +
        '');
});

function makeGraphActive(){
    $(document).ready(function () {
        var url = window.location;
        $('ul#navigation a[href="' + url + '"]').parent().addClass('active');
        $('ul#navigation a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');
    });
}

function loadWait() {
    Loader.open();
    setTimeout(() => {
        $(".loader-wrapper").fadeOut("slow");
        Loader.close()
    }, 500);
}

document.getElementById("btnReset").onclick = function () {
    document.getElementById("productsearch-globalsearch").value = ""
}

function makeBlueChart(){
    let colorPalette = ['rgb(124, 181, 236)'];
    let base = +new Date(1988, 9, 3);
    let oneDay = 24 * 3600 * 1000;
    let data = [[base, Math.random() * 300]];
    for (let i = 1; i < 20000; i++) {
        let now = new Date((base += oneDay));
        data.push([+now, Math.round((Math.random() - 0.5) * 20 + data[i - 1][1])]);
    }
   return option = {
        tooltip: {
            trigger: 'axis',
            position: function (pt) {
                return [pt[0], '10%'];
            }
        },
        title: {
            left: 'center',
            text: 'PM 1.0',
            fontWeight:'lighter'
        },
        toolbox: {
            feature: {
                dataZoom: {
                    yAxisIndex: 'none'
                },
                restore: {},
                saveAsImage: {}
            }
        },
        xAxis: {
            type: 'time',
            showGrid: false,
            boundaryGap: false,
        },
        yAxis: {
            type: 'value',
            showGrid: false,
            boundaryGap: [0, '100%'],
            splitLine: {
                show: true
            },
        },
        dataZoom: [
            {
                type: 'inside',
                start: 0,
            },
            {
                start: 0,
            }
        ],
        series: [
            {
                z2:9,
                z: 9,
                color: colorPalette,
                name: 'Fake Data',
                type: 'line',
                smooth: true,
                symbol: 'none',
                areaStyle: {},
                data: data,
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                        {
                            offset: 0,
                            color: '#FFFFFF'
                        },
                        {
                            offset: 1,
                            color: '#FFFFFF'
                        },
                    ])
                },
            }
        ],
    };
}

function makeBarChart(active, non) {
    let colorPalette = ['#08ff00', '#ff001e'];
    return {
        title: {
            text: 'Product Status',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'right',
            textStyle: {
                fontSize: '14',
            },
        },
        series: [
            {
                type: 'pie',
                radius: '60%',
                data: [
                    {value:active,name:'Active'},
                    {value:non,name:'Non-Active'}
                ],
                color: colorPalette,
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ],
        graph: {
            color: colorPalette
        }
    };
}

