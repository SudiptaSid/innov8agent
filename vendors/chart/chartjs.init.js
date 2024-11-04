(function ($) {
    "use strict";

    /* function draw() {
		
	} */

    var dlabSparkLine = (function () {
        //let draw = Chart.controllers.line.__super__.draw; //draw shadow

        var screenWidth = $(window).width();

        var barChart1 = function () {
            if (jQuery("#barChart_1").length > 0) {
                const barChart_1 = document.getElementById("barChart_1").getContext("2d");

                barChart_1.height = 100;

                new Chart(barChart_1, {
                    type: "bar",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40],
                                borderColor: "rgba(249, 58, 11, 1)",
                                borderWidth: "0",
                                barPercentage: 0.5,
                                backgroundColor: "rgba(249, 58, 11, 1)",
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                },
                            },
                        },
                    },
                });
            }
        };
        var barChart2 = function () {
            if (jQuery("#barChart_2").length > 0) {
                //gradient bar chart
                const barChart_2 = document.getElementById("barChart_2").getContext("2d");
                //generate gradient
                const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
                barChart_2gradientStroke.addColorStop(0, "rgba(249, 58, 11, 1)");
                barChart_2gradientStroke.addColorStop(1, "rgba(249, 58, 11, 0.5)");

                barChart_2.height = 100;

                new Chart(barChart_2, {
                    type: "bar",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40],
                                borderColor: barChart_2gradientStroke,
                                borderWidth: "0",
                                barPercentage: 0.5,
                                backgroundColor: barChart_2gradientStroke,
                                hoverBackgroundColor: barChart_2gradientStroke,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                },
                            },
                        },
                    },
                });
            }
        };
        var barChart3 = function () {
            //stalked bar chart
            if (jQuery("#barChart_3").length > 0) {
                const barChart_3 = document.getElementById("barChart_3").getContext("2d");
                //generate gradient
                const barChart_3gradientStroke = barChart_3.createLinearGradient(50, 100, 50, 50);
                barChart_3gradientStroke.addColorStop(0, "rgba(249, 58, 11, 1)");
                barChart_3gradientStroke.addColorStop(1, "rgba(249, 58, 11, 0.5)");

                const barChart_3gradientStroke2 = barChart_3.createLinearGradient(50, 100, 50, 50);
                barChart_3gradientStroke2.addColorStop(0, "rgba(98, 126, 234, 1)");
                barChart_3gradientStroke2.addColorStop(1, "rgba(98, 126, 234, 1)");

                const barChart_3gradientStroke3 = barChart_3.createLinearGradient(50, 100, 50, 50);
                barChart_3gradientStroke3.addColorStop(0, "rgba(238, 60, 60, 1)");
                barChart_3gradientStroke3.addColorStop(1, "rgba(238, 60, 60, 1)");

                barChart_3.height = 100;

                let barChartData = {
                    defaultFontFamily: "Poppins",
                    labels: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat", "Sun"],
                    datasets: [
                        {
                            label: "Red",
                            backgroundColor: barChart_3gradientStroke,
                            hoverBackgroundColor: barChart_3gradientStroke,
                            data: ["12", "12", "12", "12", "12", "12", "12"],
                        },
                        {
                            label: "Green",
                            backgroundColor: barChart_3gradientStroke2,
                            hoverBackgroundColor: barChart_3gradientStroke2,
                            data: ["12", "12", "12", "12", "12", "12", "12"],
                        },
                        {
                            label: "Blue",
                            backgroundColor: barChart_3gradientStroke3,
                            hoverBackgroundColor: barChart_3gradientStroke3,
                            data: ["12", "12", "12", "12", "12", "12", "12"],
                        },
                    ],
                };

                new Chart(barChart_3, {
                    type: "bar",
                    data: barChartData,
                    options: {
                        plugins: {
                            legend: false,
                        },
                        legend: {
                            display: false,
                        },
                        title: {
                            display: false,
                        },
                        tooltips: {
                            mode: "index",
                            intersect: false,
                        },
                        responsive: true,
                        scales: {
                            x: {
                                stacked: true,
                            },
                            y: {
                                stacked: true,
                            },
                        },
                    },
                });
            }
        };

        var lineChart1 = function () {
            if (jQuery("#lineChart1").length > 0) {
                //basic line chart
                const lineChart1 = document.getElementById("lineChart1").getContext("2d");

                // Chart.controllers.line = Chart.controllers.line.extend({
                // 	draw: function () {
                // 		draw.apply(this, arguments);
                // 		let nk = this.chart.chart.ctx;
                // 		let _stroke = nk.stroke;
                // 		nk.stroke = function () {
                // 			nk.save();
                // 			nk.shadowColor = 'rgba(255, 0, 0, .2)';
                // 			nk.shadowBlur = 10;
                // 			nk.shadowOffsetX = 0;
                // 			nk.shadowOffsetY = 10;
                // 			_stroke.apply(this, arguments)
                // 			nk.restore();
                // 		}
                // 	}
                // });

                lineChart1.height = 100;

                new Chart(lineChart1, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: "rgba(249, 58, 11, 1)",
                                borderWidth: "2",
                                backgroundColor: "transparent",
                                pointBackgroundColor: "rgba(249, 58, 11, 1)",
                                tension: 0.5,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };
        var lineChart2 = function () {
            //gradient line chart
            if (jQuery("#lineChart2").length > 0) {
                const lineChart2 = document.getElementById("lineChart2").getContext("2d");
                //generate gradient
                const lineChart2gradientStroke = lineChart2.createLinearGradient(500, 0, 100, 0);
                lineChart2gradientStroke.addColorStop(0, "rgba(249, 58, 11, 1)");
                lineChart2gradientStroke.addColorStop(1, "rgba(249, 58, 11, 0.5)");

                // Chart.controllers.line = Chart.controllers.line.extend({
                // 	draw: function () {
                // 		draw.apply(this, arguments);
                // 		let nk = this.chart.chart.ctx;
                // 		let _stroke = nk.stroke;
                // 		nk.stroke = function () {
                // 			nk.save();
                // 			nk.shadowColor = 'rgba(0, 0, 128, .2)';
                // 			nk.shadowBlur = 10;
                // 			nk.shadowOffsetX = 0;
                // 			nk.shadowOffsetY = 10;
                // 			_stroke.apply(this, arguments)
                // 			nk.restore();
                // 		}
                // 	}
                // });

                lineChart2.height = 100;

                new Chart(lineChart2, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: lineChart2gradientStroke,
                                borderWidth: "2",
                                backgroundColor: "transparent",
                                pointBackgroundColor: "rgba(249, 58, 11, 0.5)",
                                tension: 0.5,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };
		
       /* var lineChart3 = function () {
            if (jQuery("#lineChart3").length > 0) {
                const lineChart3 = document.getElementById("lineChart3").getContext("2d");
                lineChart3.height = 100;

                new Chart(lineChart3, {
                    type: "line",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "This month",
                                data: [8500, 10200, 4500, 5500, 7000, 6500, 21000],
                                borderColor: "rgba(25, 25, 25, 1)",
                                borderWidth: 1,
                                backgroundColor: "transparent",
                                // Points
                                pointBackgroundColor: "rgba(25, 25, 25, 1)",
                                pointBorderColor: "rgba(25, 25, 25, 1)",
                                pointBorderWidth: 0,
                                pointRadius: 2,
                                // Curved
                                tension: 0.5,
                            },
                            {
                                label: "Last month",
                                data: [5500, 9500, 9000, 15000, 3000, 2500, 9800],
                                borderColor: "rgba(168, 197, 218, 1)",
                                borderWidth: 1,
                                borderDash: [3, 3],
                                backgroundColor: "transparent",
                                // Points
                                pointBackgroundColor: "rgba(168, 197, 218, 1)",
                                pointBorderColor: "rgba(168, 197, 218, 1)",
                                pointBorderWidth: 0,
                                pointRadius: 2,
                                // Curved
                                tension: 0.5,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: {
                                labels: {
                                    usePointStyle: true,
                                    boxWidth: 5,
                                    boxHeight: 5,
                                },
                            },
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 30000,
                                    min: 0,
                                    stepSize: 10000,
                                    padding: 5,
                                    callback: function (value) {
                                        if (value >= 1000) {
                                            return value / 1000 + "k";
                                        } else {
                                            return value;
                                        }
                                    },
                                },
                                grid: {
                                    display: false,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                                grid: {
                                    display: false,
                                },
                            },
                        },
                    },
                });
            }
        };*/
		
        var linechartBill = function () {
            if (jQuery("#linechartBill").length > 0) {
                const linechartBill = document.getElementById("linechartBill").getContext("2d");
                linechartBill.height = 100;

                new Chart(linechartBill, {
                    type: "line",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "Monthly Subscription",
                                data: [1, 2, 3, 4, 5, 6, 7],
                                borderColor: "rgba(25, 25, 25, 1)",
                                borderWidth: 1,
                                backgroundColor: "transparent",
                                // Points
                                pointBackgroundColor: "rgba(25, 25, 25, 1)",
                                pointBorderColor: "rgba(25, 25, 25, 1)",
                                pointBorderWidth: 0,
                                pointRadius: 2,
                                // Curved
                                tension: 0.5,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: {
                                labels: {
                                    usePointStyle: true,
                                    boxWidth: 5,
                                    boxHeight: 5,
                                },
                            },
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 1,
                                    padding: 5,
                                },
                                grid: {
                                    display: false,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                                grid: {
                                    display: false,
                                },
                            },
                        },
                    },
                });
            }
        };
		
        var lineChartShare = function () {
            //dual line chart
            if (jQuery("#lineChartShare").length > 0) {
                const lineChartShare = document.getElementById("lineChartShare").getContext("2d");
                lineChartShare.height = 20;

                new Chart(lineChartShare, {
                    type: "line",
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "Monthly Subscription",
                                data: [1, 5, 17, 10, 4, 11, 20, 1, 5, 17, 10, 4, 11, 20, 1, 5, 17, 10, 4, 11, 20, 1, 5, 17, 10, 4, 11, 20],
                                borderColor: ["#05A660"],
                                borderWidth: 1,
                                backgroundColor: "transparent",
                                // Points
                                pointBackgroundColor: "transparent",
                                pointBorderColor: "transparent",
                                pointBorderWidth: 0,
                                pointRadius: 0,
                                // Curved
                                tension: 0.5,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            tooltips: {
                                enabled: false,
                            },
                            legend: {
                                usePointStyle: true,
                                display: false,
                            },
                        },
                        scales: {
                            y: { display: false },
                            x: { display: false },
                        },
                    },
                });
            }
        };
        var lineChart4 = function () {
            //dual line chart
            if (jQuery("#lineChart4").length > 0) {
                const lineChart4 = document.getElementById("lineChart4").getContext("2d");
                //generate gradient

                Chart.controllers.line = Chart.controllers.line.extend({
                    draw: function () {
                        draw.apply(this, arguments);
                        let nk = this.chart.chart.ctx;
                        let _stroke = nk.stroke;
                        nk.stroke = function () {
                            nk.save();
                            nk.shadowColor = "rgba(0, 0, 0, 0)";
                            nk.shadowBlur = 10;
                            nk.shadowOffsetX = 0;
                            nk.shadowOffsetY = 10;
                            _stroke.apply(this, arguments);
                            nk.restore();
                        };
                    },
                });

                lineChart4.height = 100;

                new Chart(lineChart4, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [90, 60, 80, 50, 60, 55, 80],
                                borderColor: "rgba(58,122,254,1)",
                                borderWidth: "3",
                                backgroundColor: "rgba(0,0,0,0)",
                                pointBackgroundColor: "rgba(0, 0, 0, 0)",
                                tension: 0.5,
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        elements: {
                            point: {
                                radius: 0,
                            },
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                },
                                borderWidth: 3,
                                display: false,
                                lineTension: 0.4,
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };

        var areaChart1 = function () {
            //basic area chart
            if (jQuery("#areaChart_1").length > 0) {
                const areaChart_1 = document.getElementById("areaChart_1").getContext("2d");

                areaChart_1.height = 100;

                new Chart(areaChart_1, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: "rgba(0, 0, 1128, .3)",
                                borderWidth: "1",
                                backgroundColor: "rgba(249, 58, 11, .5)",
                                pointBackgroundColor: "rgba(0, 0, 1128, .3)",
                                tension: 0.5,
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };
        var areaChart2 = function () {
            //gradient area chart
            if (jQuery("#areaChart_2").length > 0) {
                const areaChart_2 = document.getElementById("areaChart_2").getContext("2d");
                //generate gradient
                const areaChart_2gradientStroke = areaChart_2.createLinearGradient(0, 1, 0, 500);
                areaChart_2gradientStroke.addColorStop(0, "rgba(238, 60, 60, 0.2)");
                areaChart_2gradientStroke.addColorStop(1, "rgba(238, 60, 60, 0)");

                areaChart_2.height = 100;

                new Chart(areaChart_2, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: "#ff2625",
                                borderWidth: "4",
                                backgroundColor: areaChart_2gradientStroke,
                                tension: 0.5,
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 5,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };
        var areaChart3 = function () {
            //gradient area chart
            if (jQuery("#areaChart_3").length > 0) {
                const areaChart_3 = document.getElementById("areaChart_3").getContext("2d");

                areaChart_3.height = 100;

                new Chart(areaChart_3, {
                    type: "line",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [25, 20, 60, 41, 66, 45, 80],
                                borderColor: "rgb(249, 58, 11)",
                                borderWidth: "1",
                                backgroundColor: "rgba(249, 58, 11, .5)",
                                tension: 0.5,
                                fill: true,
                            },
                            {
                                label: "My First dataset",
                                data: [5, 25, 20, 41, 36, 75, 70],
                                borderColor: "rgb(255, 92, 0)",
                                borderWidth: "1",
                                backgroundColor: "rgba(255, 92, 0, .5)",
                                tension: 0.5,
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },

                        scales: {
                            y: {
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    min: 0,
                                    stepSize: 20,
                                    padding: 10,
                                },
                            },
                            x: {
                                ticks: {
                                    padding: 5,
                                },
                            },
                        },
                    },
                });
            }
        };

        var radarChart = function () {
            if (jQuery("#radar_chart").length > 0) {
                //radar chart
                const radar_chart = document.getElementById("radar_chart").getContext("2d");

                const radar_chartgradientStroke1 = radar_chart.createLinearGradient(500, 0, 100, 0);
                radar_chartgradientStroke1.addColorStop(0, "rgba(54, 185, 216, .5)");
                radar_chartgradientStroke1.addColorStop(1, "rgba(75, 255, 162, .5)");

                const radar_chartgradientStroke2 = radar_chart.createLinearGradient(500, 0, 100, 0);
                radar_chartgradientStroke2.addColorStop(0, "rgba(68, 0, 235, .5");
                radar_chartgradientStroke2.addColorStop(1, "rgba(68, 236, 245, .5");

                // radar_chart.height = 100;
                new Chart(radar_chart, {
                    type: "radar",
                    data: {
                        defaultFontFamily: "Poppins",
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#f21780",
                                borderWidth: "1",
                                backgroundColor: radar_chartgradientStroke2,
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "#f21780",
                                borderWidth: "1",
                                backgroundColor: radar_chartgradientStroke1,
                            },
                        ],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        maintainAspectRatio: false,
                        scale: {
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
            }
        };
        var pieChart = function () {
            //pie chart
            if (jQuery("#pie_chart").length > 0) {
                //pie chart
                const pie_chart = document.getElementById("pie_chart").getContext("2d");
                // pie_chart.height = 100;
                new Chart(pie_chart, {
                    type: "pie",
                    data: {
                        defaultFontFamily: "Poppins",
                        datasets: [
                            {
                                data: [45, 25, 20, 10],
                                borderWidth: 0,
                                backgroundColor: ["rgba(249, 58, 11, .9)", "rgba(249, 58, 11, .7)", "rgba(249, 58, 11, .5)", "rgba(0,0,0,0.07)"],
                                hoverBackgroundColor: ["rgba(249, 58, 11, .9)", "rgba(249, 58, 11, .7)", "rgba(249, 58, 11, .5)", "rgba(0,0,0,0.07)"],
                            },
                        ],
                        labels: ["one", "two", "three", "four"],
                    },
                    options: {
                        plugins: {
                            legend: false,
                        },
                        legend: false,
                        maintainAspectRatio: false,
                    },
                });
            }
        };
        var pieChartChannels = function () {
            //pie chart
            if (jQuery("#pieChartChannels").length > 0) {
                //pie chart
                const pieChartChannels = document.getElementById("pieChartChannels").getContext("2d");
                pieChartChannels.height = 100;
                new Chart(pieChartChannels, {
                    type: "pie",
                    data: {
                        datasets: [
                            {
                                data: [40, 12, 12, 12, 12, 12],
                                borderWidth: 0,
                                backgroundColor: ["#E9E9E9", "#00CFDE", "#555770", "#0063F7", "#F85152", "#5B8DEF"],
                                hoverBackgroundColor: ["#E9E9E9", "#00CFDE", "#555770", "#0063F7", "#F85152", "#5B8DEF"],
                            },
                        ],
                        labels: ["E-mail", "X", "TikTok", "LinkedIn", "Instagram", "Facebook"],
                    },
                    options: {
                        plugins: {
                            legend: {
                                position: "bottom",
                            },
                        },
                        maintainAspectRatio: true,
                    },
                });
            }
        };
        var doughnutChart = function () {
            if (jQuery("#doughnut_chart").length > 0) {
                //doughut chart
                const doughnut_chart = document.getElementById("doughnut_chart").getContext("2d");
                // doughnut_chart.height = 100;
                new Chart(doughnut_chart, {
                    type: "doughnut",
                    data: {
                        weight: 5,
                        defaultFontFamily: "Poppins",
                        datasets: [
                            {
                                data: [45, 25, 20],
                                borderWidth: 3,
                                borderColor: "rgba(255,255,255,1)",
                                backgroundColor: ["rgba(249, 58, 11, 1)", "rgba(98, 126, 234, 1)", "rgba(238, 60, 60, 1)"],
                                hoverBackgroundColor: ["rgba(249, 58, 11, 0.9)", "rgba(98, 126, 234, .9)", "rgba(238, 60, 60, .9)"],
                            },
                        ],
                        // labels: [
                        //     "green",
                        //     "green",
                        //     "green",
                        //     "green"
                        // ]
                    },
                    options: {
                        weight: 1,
                        cutoutPercentage: 70,
                        responsive: true,
                        maintainAspectRatio: false,
                    },
                });
            }
        };
        var polarChart = function () {
            if (jQuery("#polar_chart").length > 0) {
                //polar chart
                const polar_chart = document.getElementById("polar_chart").getContext("2d");
                // polar_chart.height = 100;
                new Chart(polar_chart, {
                    type: "polarArea",
                    data: {
                        defaultFontFamily: "Poppins",
                        datasets: [
                            {
                                data: [15, 18, 9, 6, 19],
                                borderWidth: 0,
                                backgroundColor: [
                                    "rgba(249, 58, 11, 1)",
                                    "rgba(98, 126, 234, 1)",
                                    "rgba(238, 60, 60, 1)",
                                    "rgba(54, 147, 255, 1)",
                                    "rgba(255, 92, 0, 1)",
                                ],
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                    },
                });
            }
        };

        /* Function ============ */
        return {
            init: function () {},

            load: function () {
                barChart1();
                barChart2();
                barChart3();
                lineChart1();
                lineChart2();
                lineChart3();
                linechartBill();
                lineChartShare();
                lineChart4();
                areaChart1();
                areaChart2();
                areaChart3();
                radarChart();
                pieChart();
                pieChartChannels();
                doughnutChart();
                polarChart();
            },

            resize: function () {
                // barChart1();
                // barChart2();
                // barChart3();
                // lineChart1();
                // lineChart2();
                // lineChart3();
                // linechartBill();
                // lineChartShare();
                // lineChart4();
                // areaChart1();
                // areaChart2();
                // areaChart3();
                // radarChart();
                // pieChart();
                // pieChartChannels();
                // doughnutChart();
                // polarChart();
            },
        };
    })();

    jQuery(document).ready(function () {});

    jQuery(window).on("load", function () {
        dlabSparkLine.load();
    });

    jQuery(window).on("resize", function () {
        //dlabSparkLine.resize();
        setTimeout(function () {
            dlabSparkLine.resize();
        }, 1000);
    });
})(jQuery);
