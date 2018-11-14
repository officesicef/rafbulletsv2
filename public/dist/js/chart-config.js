"use strict";

const charts = {
    loadRevenueChart: function(dates_x_axis, panelist_amount_y_axis) {
        const chartConfig = {
            type: 'line',
            data: {
                labels: dates_x_axis,
                datasets: [
                    {
                        label: '# revenue',
                        data: panelist_amount_y_axis,
                        // lineTension: 0,
                        backgroundColor: colors['blue'].alpha(0.2).toString(),
                        borderColor:  colors['blue'].toString(),
                        borderWidth: 2,
                        pointRadius: 2,
                        fill:false,
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                        }
                    }],
                    xAxes: [{

                        display: true,
                    }]
                },
                legend: {
                    display: false,
                }
            }
        };

        const revenueCanvasElement = document.getElementById('revenue-canvas').getContext('2d');
        const revenueChart = new Chart(revenueCanvasElement, chartConfig);
    },

    loadCompletesChart: function (dates_x_axis, completes_y_axis) {
        const chartConfig = {
            type: 'bar',
            data: {
                labels: dates_x_axis,
                datasets: [
                    {
                        label: 'Completes',
                        data: completes_y_axis,
                        lineTension: 0.3,
                        backgroundColor:  colors['teal'].alpha(0.2).toString(),
                        borderColor: colors['teal'].toString(),
                        borderWidth: 2,
                        pointRadius: 2,
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            stepSize : 1,
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        categoryPercentage: 0.6,
                        barPercentage: 0.6,
                        display: true,
                    }]
                },
                legend: {
                    display: false,
                }
            }
        };


        const completesCanvasElement = document.getElementById('completes-canvas').getContext('2d');
        const completesChart = new Chart(completesCanvasElement, chartConfig);
    }
};