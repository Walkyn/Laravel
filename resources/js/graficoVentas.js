document.addEventListener('DOMContentLoaded', function() {
    function actualizarGraficos() {
        // Datos estáticos para el gráfico de ventas diarias (últimos 10 días)
        const ventasDiariasData = {
            totales: [2000, 3000, 2500, 1800, 2200, 2800, 3300, 2900, 3200, 3500],
            fechas: ['2024-11-01', '2024-11-02', '2024-11-03', '2024-11-04', '2024-11-05', '2024-11-06',
                '2024-11-07', '2024-11-08', '2024-11-09', '2024-11-10'
            ]
        };

        const ventasDiariasOptions = {
            chart: {
                type: 'bar',
                height: 400
            },
            series: [{
                name: 'Ventas Diarias',
                data: ventasDiariasData.totales
            }],
            xaxis: {
                categories: ventasDiariasData.fechas
            },
            colors: ['#36a2eb'],
            yaxis: {
                title: {
                    text: 'Monto',
                    style: {
                        fontFamily: 'Jakarta, sans-serif'
                    }
                },
                min: 0,
                max: Math.max(...ventasDiariasData.totales) + 1000
            },
            title: {
                text: 'Ventas en los últimos 10 días',
                align: 'center',
                style: {
                    fontFamily: 'Jakarta, sans-serif'
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val;
                },
                style: {
                    fontSize: '14px',
                    fontFamily: 'Jakarta, sans-serif'
                },
                offsetY: -10
            }
        };

        const ventasDiariasChart = new ApexCharts(document.querySelector('#ventasDiariasChart'),
            ventasDiariasOptions);
        ventasDiariasChart.render();

        // Datos estáticos para el gráfico de ventas mensuales (últimos 12 meses)
        const ventasMensualesData = {
            totales: [25000, 28000, 27000, 30000, 32000, 35000, 36000, 34000, 30000, 29000, 31000,
                32000],
            meses: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        };

        const ventasMensualesOptions = {
            chart: {
                type: 'bar',
                height: 400
            },
            series: [{
                name: 'Ventas Mensuales',
                data: ventasMensualesData.totales
            }],
            xaxis: {
                categories: ventasMensualesData.meses
            },
            colors: ['#ff6384'],
            yaxis: {
                title: {
                    text: 'Monto',
                    style: {
                        fontFamily: 'Jakarta, sans-serif'
                    }
                },
                min: 0,
                max: Math.max(...ventasMensualesData.totales) + 2000
            },
            title: {
                text: 'Ventas en los últimos 12 meses',
                align: 'center',
                style: {
                    fontFamily: 'Jakarta, sans-serif'
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val;
                },
                style: {
                    fontSize: '14px',
                    fontFamily: 'Jakarta, sans-serif'
                },
                offsetY: -10
            }
        };

        const ventasMensualesChart = new ApexCharts(document.querySelector('#ventasMensualesChart'),
            ventasMensualesOptions);
        ventasMensualesChart.render();
    }

    actualizarGraficos();
});
