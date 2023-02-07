function loadWait() {
    Loader.open();
    setTimeout(() => {
        Loader.close()
    }, 500);
}

document.getElementById("btnReset").onclick = function () {
    document.getElementById("productsearch-globalsearch").value = ""
}


function makeBarChart(active, non) {
    var colorPalette = ['#08ff00', '#ff001e'];
    return {
        title: {
            text: 'Active and non-active products',
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
