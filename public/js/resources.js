$(document).ready(function() {
    
    var drag =  function() {
        $('.calendar-event').each(function() {

        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
        });

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 1111999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });
    });
    };
    
    var removeEvent =  function() {
        $('.remove-calendar-event').click(function() {
        $(this).closest('.calendar-event').fadeOut();
        return false;
    });
    };
    
    $(".add-event").keypress(function (e) {
        if ((e.which == 13)&&(!$(this).val().length == 0)) {
            $('<div class="calendar-event"><p>' + $(this).val() + '</p><a href="javascript:void(0);" class="remove-calendar-event"><i class="icon-close"></i></a></div>').insertBefore(".add-event");
            $(this).val('');
        } else if(e.which == 13) {
            alert('Please enter event name');
        }
        drag();
        removeEvent();
    });
    
    
    drag();
    removeEvent();
    
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var year = date.getFullYear();
    
    $('#calendar').fullCalendar({
       
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: new Date(year, month, day-8)
				},
				{
					title: 'Long Event',
					start: new Date(year, month, day-5),
					end: new Date(year, month, day-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(year, month, day)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(year, month, day+7)
				},
				{
					title: 'Conference',
					start: new Date(year, month, day+3),
					end: new Date(year, month, day+6)
				},
				{
					title: 'Meeting',
					start: new Date(year, month, day+5)
				},
				{
					title: 'Lunch',
					start: new Date(year, month, day+7)
				},
				{
					title: 'Meeting',
					start: new Date(year, month, day+10)
				},
				{
					title: 'Happy Hour',
					start: new Date(year, month, day+10)
				},
				{
					title: 'Dinner',
					start: new Date(year, month, day+13)
				},
				{
					title: 'Birthday Party',
					start: new Date(year, month, day+15)
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: new Date(year, month, day+18)
				}
			]
		});
    
});
$( document ).ready(function() {
    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
                spanGaps: false,
            }
        ]
    };
    
    var ctx = $("#chart1");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    
    var data2 = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                data: [65, 59, 80, 81, 56, 55, 40],
            }
        ]
    };
    
    var ctx2 = $("#chart2");
    var myBarChart = new Chart(ctx2, {
        type: 'bar',
        data: data2,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    
    var data3 = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };
    
    var ctx3 = $("#chart3");
    var myRadarChart = new Chart(ctx3, {
        type: 'radar',
        data: data3,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    
    var data4 = {
        datasets: [{
            data: [
                11,
                16,
                7,
                3,
                14
            ],
            backgroundColor: [
                "#FF6384",
                "#4BC0C0",
                "#FFCE56",
                "#E7E9ED",
                "#36A2EB"
            ],
            label: 'My dataset' // for legend
        }],
        labels: [
            "Red",
            "Green",
            "Yellow",
            "Grey",
            "Blue"
        ]
    };
    
    var ctx4 = $("#chart4");
    new Chart(ctx4, {
        data: data4,
        type: 'polarArea',
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
   
    
    var data5 = {
        labels: [
            "Red",
            "Blue",
            "Yellow"
        ],
        datasets: [
            {
                data: [300, 50, 100],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
    };
    
    var ctx5 = $("#chart5");
    var myDoughnutChart = new Chart(ctx5, {
        type: 'doughnut',
        data: data5,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    
    
    var data6 = {
        datasets: [
            {
                label: 'First Dataset',
                data: [
                    {
                        x: 20,
                        y: 30,
                        r: 15
                    },
                    {
                        x: 40,
                        y: 10,
                        r: 10
                    }
                ],
                backgroundColor:"#FF6384",
                hoverBackgroundColor: "#FF6384",
            }]
    };
    
    var ctx6 = $("#chart6");
    var myBubbleChart = new Chart(ctx6,{
        type: 'bubble',
        data: data6,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});
$(document).ready(function () {

    var flot1 = function () {
        var data = [[0, 11], [1, 15], [2, 25], [3, 24], [4, 13], [5, 18]];
        var dataset = [{
            data: data,
            color: "#30B19B"
        }];
        var ticks = [[0, "1"], [1, "2"], [2, "3"], [3, "4"], [4, "5"], [5, "6"]];

        var options = {
            series: {
                bars: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.5
            },
            xaxis: {
                ticks: ticks
            },
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "X: %x, Y: %y",
                defaultTheme: false
            }
        };
        $.plot($("#flot1"), dataset, options);
    };
    
    var flot2 = function () {
        var data = [[0, 11], [1, 15], [2, 25], [3, 24], [4, 13], [5, 18]];
        var dataset = [{
            data: data,
            color: "#30B19B"
        }];
        var ticks = [[0, "1"], [1, "2"], [2, "3"], [3, "4"], [4, "5"], [5, "6"]];

        var options = {
            series: {
                lines: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.5
            },
            xaxis: {
                ticks: ticks
            },
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "X: %x, Y: %y",
                defaultTheme: false
            }
        };
        $.plot($("#flot2"), dataset, options);
    };
    
    var flot3 = function () {
        var data = [{
            label: "1",
            data: 42,
            color: "#30B19B",
        }, {
            label: "2",
            data: 23,
            color: "#5FE8D0",
        }, {
            label: "3",
            data: 35,
            color: "#E2E2E2",
        }];
        var options = {
            series: {
                pie: {
                    show: true
                }
            },
            legend: {
                labelFormatter: function(label, series){
                    return '<span class="pie-chart-legend">'+label+'</span>';
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s",
                shifts: {
                    x: 20,
                    y: 0
                },
                defaultTheme: false
            }
        };
        $.plot($("#flot3"), data, options);
    };
    
    var flot4 = function () {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;
        
		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		var plot4 = $.plot("#flot4", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			},
            colors: ["#30B19B"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
		});

		function update() {
			plot4.setData([getRandomData()]);

			plot4.draw();
			setTimeout(update, 30);
		}

		update();
        
    };

    flot1();
    flot2();
    flot3();
    flot4();
});
$( document ).ready(function() {
    Morris.Area({
        element: 'morris1',
        data: [
            {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
            {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
            {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
            {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
            {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
            {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
            {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
            {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
            {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
            {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
        ],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        hideHover: 'auto',
        lineColors: ['#8adfd0', '#6ad6c3','#30B19B'],
        resize: true,
    });
    
    Morris.Bar({
        element: 'morris2',
        data: [
            { year: '2006', a: 25, b: 15 },
            { year: '2007', a: 50, b: 40 },
            { year: '2008', a: 75, b: 65 },
            { year: '2009', a: 100, b: 90 },
            { year: '2010', a: 60, b: 50 },
            { year: '2011', a: 75, b: 65 },
            { year: '2012', a: 100, b: 90 } 
        ],
        xkey: 'year',
        ykeys: ['a', 'b'],
        labels: ['a', 'b'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        barColors: ['#6ad6c3','#30B19B'],
        resize: true
    });
    
    Morris.Line({
        element: 'morris3',
        data: [
            { year: '2006', a: 25, b: 15 },
            { year: '2007', a: 50, b: 40 },
            { year: '2008', a: 75, b: 65 },
            { year: '2009', a: 100, b: 90 },
            { year: '2010', a: 60, b: 50 },
            { year: '2011', a: 75, b: 65 },
            { year: '2012', a: 100, b: 90 } 
        ],
        xkey: 'year',
        ykeys: ['a', 'b'],
        labels: ['a', 'b'],
        resize: true,
        lineColors: ['#6ad6c3','#30B19B']
    });
    
    Morris.Donut({
        element: 'morris4',
        data: [
            {label: 'Javascript', value: 35 },
            {label: 'HTML5', value: 45 },
            {label: 'CSS3', value: 30 },
            {label: 'PHP', value: 20 }
        ],
        resize: true,
        colors: ['#74e4d1', '#44cbb4', '#119d85','#30B19B'],
    });
});
$( document ).ready(function() {
    var graph1 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw1"),
        series: [{
            color: '#30B19B',
            data: [ 
                { x: 0, y: 40 }, 
                { x: 1, y: 49 }, 
                { x: 2, y: 38 }, 
                { x: 3, y: 30 }, 
                { x: 4, y: 32 } ]
        }]
    });
 
    graph1.render();
    
    var graph2 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw2"),
        renderer: 'area',
        stroke: true,
        series: [ {
                data: [ 
                    { x: 0, y: 40 }, 
                    { x: 1, y: 49 }, 
                    { x: 2, y: 38 }, 
                    { x: 3, y: 30 }, 
                    { x: 4, y: 32 } 
                ],
                color: '#30B19B'
        }, {    
                data: [
                    { x: 0, y: 40 },
                    { x: 1, y: 49 },
                    { x: 2, y: 38 }, 
                    { x: 3, y: 30 }, 
                    { x: 4, y: 32 } 
                ],
                color: '#E9E9E9'
        }]  
    });
 
    graph2.render();
    
    var graph3 = new Rickshaw.Graph({
        element: document.querySelector("#rickshaw3"),
        renderer: 'line',
        series: [{
            data: [
                { x: 0, y: 40 }, 
                { x: 1, y: 49 }, 
                { x: 2, y: 38 },
                { x: 3, y: 30 }, 
                { x: 4, y: 32 } 
            ],
            color: '#30B19B'
        }]
    });
 
    graph3.render();
    
    var graph4 = new Rickshaw.Graph({
        element: document.querySelector("#rickshaw4"),
        renderer: 'line',
        series: [{
            data: [
                { x: 0, y: 40 },
                { x: 1, y: 49 },
                { x: 2, y: 38 },
                { x: 3, y: 30 }, 
                { x: 4, y: 32 } 
            ],
            color: '#30B19B'
        }, {
            data: [ 
                { x: 0, y: 20 },
                { x: 1, y: 24 },
                { x: 2, y: 19 },
                { x: 3, y: 15 }, 
                { x: 4, y: 16 } 
            ],
            color: '#E9E9E9'
        }]
    });
 
    graph4.render();
    
    var graph5 = new Rickshaw.Graph({
        element: document.querySelector("#rickshaw5"),
        renderer: 'bar',
        series: [{
            data: [ 
                { x: 0, y: 40 }, 
                { x: 1, y: 49 },
                { x: 2, y: 38 },
                { x: 3, y: 30 },
                { x: 4, y: 32 } 
            ],
            color: '#30B19B'
        }]
    });
 
    graph5.render();
    
    var graph6 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw6"),
        renderer: 'bar',
        series: [ 
            {
                data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
                color: '#30B19B'
            }, {
                data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
                color: '#E9E9E9'
            } ]
    });
    
    graph6.render();
    
    var graph7 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw7"),
        renderer: 'bar',
        stack: false,
        series: [{
            data: [ 
                { x: 0, y: 40 }, 
                { x: 1, y: 49 }, 
                { x: 2, y: 38 }, 
                { x: 3, y: 30 }, 
                { x: 4, y: 32 } 
            ],
            color: '#30B19B'
        }, {
            data: [ 
                { x: 0, y: 20 }, 
                { x: 1, y: 24 },
                { x: 2, y: 19 },
                { x: 3, y: 15 }, 
                { x: 4, y: 16 }
            ],
            color: '#E9E9E9'
        }]
    });
 
    graph7.render();
    
    var graph8 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw8"),
        renderer: 'scatterplot',
        stroke: true,
        max: 50,
        series: [{
            data: [
                { x: 0, y: 22 },
                { x: 1, y: 26 }, 
                { x: 2, y: 30 }, 
                { x: 3, y: 28 }, 
                { x: 4, y: 31 }, 
                { x: 5, y: 35 },
                { x: 6, y: 38 },
                { x: 7, y: 42 }, 
                { x: 8, y: 34 }, 
                { x: 9, y: 27 },
                { x: 10, y: 26 } 
            ],
            color: '#30B19B'
        }]
    });
 
    graph8.render();
    
    
    var seriesData = [ [], [], [], [], [], [], [], [], [] ];
    var random = new Rickshaw.Fixtures.RandomData(150);

    for (var i = 0; i < 150; i++) {
        random.addData(seriesData);
    }

    var graph9 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw9"),
        renderer: 'area',
        stroke: true,
        preserve: true,
        series: [
            {
                color: '#30B19B',
                data: seriesData[0],
                name: 'Moscow'
            }, {
                color: '#E9E9E9',
                data: seriesData[1],
                name: 'Shanghai'
            }
        ]
    });
 
    graph9.render();
    
    setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph9.update();
    }, 300 );
    
    $(window).resize(function(){
        graph9.render();
    });
});
$( document ).ready(function() {
    
    var DrawSparkline = function() {
        $('#sparkline1').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
            type: 'line',
            width: $('#sparkline1').width(),
            height: '165',
            chartRangeMax: 50,
            lineColor: '#ebcc3a',
            fillColor: 'rgba(235,204,58,0.3)',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
        });
    
        $('#sparkline1').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
            type: 'line',
            width: $('#sparkline1').width(),
            height: '165',
            chartRangeMax: 40,
            lineColor: '#EB3737',
            fillColor: 'rgba(242,86,86,0.3)',
            composite: true,
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
        });
    
        $('#sparkline2').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'bar',
            height: '165',
            barWidth: '10',
            barSpacing: '3',
            barColor: '#7A6FBE'
        });
        
        $('#sparkline3').sparkline([20, 40, 30, 10], {
            type: 'pie',
            width: '165',
            height: '165',
            sliceColors: ['#7a6fbe', '#61c5e3', '#343F47', '#f6d433']
        });
    
        $('#sparkline4').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
            type: 'line',
            width: $('#sparkline1').width(),
            height: '165',
            chartRangeMax: 50,
            lineColor: '#ebcc3a',
            fillColor: 'transparent',
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)'
        });
    
        $('#sparkline4').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
            type: 'line',
            width: $('#sparkline1').width(),
            height: '165',
            chartRangeMax: 40,
            lineColor: '#EB3737',
            fillColor: 'transparent',
            composite: true,
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)'
        });
    
        $('#sparkline6').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'bar',
            height: '165',
            barWidth: '10',
            barSpacing: '3',
            barColor: '#8DDFF6'
        });
    
        $('#sparkline6').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'line',
            width: $('#sparkline1').width(),
            height: '165',
            lineColor: '#F25656',
            fillColor: 'transparent',
            composite: true,
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)'
        });
        
    },
        DrawMouseSpeed = function () {
            var mrefreshinterval = 500; // update display every 500ms
            var lastmousex=-1; 
            var lastmousey=-1;
            var lastmousetime;
            var mousetravel = 0;
            var mpoints = [];
            var mpoints_max = 30;
            $('html').mousemove(function(e) {
                var mousex = e.pageX;
                var mousey = e.pageY;
                if (lastmousex > -1) {
                    mousetravel += Math.max( Math.abs(mousex-lastmousex), Math.abs(mousey-lastmousey) );
                }
                lastmousex = mousex;
                lastmousey = mousey;
            });
            var mdraw = function() {
                var md = new Date();
                var timenow = md.getTime();
                if (lastmousetime && lastmousetime!=timenow) {
                    var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                    mpoints.push(pps);
                    if (mpoints.length > mpoints_max)
                        mpoints.splice(0,1);
                    mousetravel = 0;
                    $('#sparkline5').sparkline(mpoints, {
                        tooltipSuffix: ' pixels per second',
                        type: 'line',
                        width: $('#sparkline1').width(),
                        height: '165',
                        chartRangeMax: 50,
                        lineColor: '#22BAA0',
                        fillColor: 'rgba(34,186,160,0.3)',
                        highlightLineColor: 'rgba(24,147,126,.1)',
                        highlightSpotColor: 'rgba(24,147,126,.2)',
                    });
                }
                lastmousetime = timenow;
                setTimeout(mdraw, mrefreshinterval);
            }
            // We could use setInterval instead, but I prefer to do it this way
            setTimeout(mdraw, mrefreshinterval); 
        };
    
    DrawSparkline();
    DrawMouseSpeed();
    
    var resizeChart;

    $(window).resize(function(e) {
        clearTimeout(resizeChart);
        resizeChart = setTimeout(function() {
            DrawSparkline();
            DrawMouseSpeed();
        }, 300);
    });
});
$(document).ready(function() {
      $('#counter').countdown('2017/09/27', function(event) {
          $(this).html(event.strftime('%d:%H:%M:%S'));
      });
});
$(document).ready(function() {
    $('.summernote').summernote({
	  height: 350
	});
});
$( document ).ready(function() {
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(27.284836,-81.075513),
            zoom: 9
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});
$( document ).ready(function() {
    
    // CounterUp Plugin
    
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            timeOut: 5000
        };
        toastr.success('There are 3 layers in this version, others are coming soon', 'Welcome!');
    }, 1800);
    
    
    // First Chart
    var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "First Item",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(75,192,192,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [135, 120, 100, 93, 90, 93, 100],
                spanGaps: false,
            },
            {
                label: "Second Item",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(191, 191, 191,0.4)",
                borderColor: "rgba(191, 191, 191,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(191, 191, 191,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(191, 191, 191,1)",
                pointHoverBorderColor: "rgba(191, 191, 191,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [68, 55, 54, 48, 45, 48, 50],
                spanGaps: false,
            },
            {
                label: "Third Item",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(54, 162, 235,0.4)",
                borderColor: "rgba(54, 162, 235,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(54, 162, 235,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(54, 162, 235,1)",
                pointHoverBorderColor: "rgba(54, 162, 235,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [32, 33, 39, 33, 30, 33, 26],
                spanGaps: false,
            }
        ]
    };
    
    var ctx = $("#chart1");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        suggestedMax: 180, 
                        beginAtZero:true
                    }
                }]
            }, 
            legend: {
                display: false
            }
        }
    });
    
    
    // Second Chart
    var data2 = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                data: [65, 59, 80, 81, 56, 55, 40],
            }
        ]
    };
    
    var ctx2 = $("#chart2");
    var myBarChart = new Chart(ctx2, {
        type: 'bar',
        data: data2,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }, 
            legend: {
                display: false
            }
        }
    });
    
    
});
$(document).ready(function() {
    $('.summernote').summernote({
	  height: 350
	});
    
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
    
    $('#cp1').colorpicker({
        format: 'hex'
    });
    $('#cp2').colorpicker();
    
    $('#timepicker1').timepicker();
});
$( document ).ready(function() {
    var $image = $(".image-crop > img");

    $image.cropper({
        aspectRatio: 7 / 5,
        preview: ".img-preview"
    });
    
    $("#zoomIn").click(function() {
        $image.cropper('zoom', 0.1);
    });

    $("#zoomOut").click(function() {
        $image.cropper('zoom', -0.1);
    });

    $("#rotateLeft").click(function() {
        $image.cropper('rotate', 45);
    });

    $("#rotateRight").click(function() {
        $image.cropper('rotate', -45);
    });
    
    $("#clear").click(function() {
        $image.cropper('clear');
    });
    
    var $replaceWith = $('#replaceWith');
    $('#replace').click(function () {
      $image.cropper('replace', $replaceWith.val());
    });
    
});
$(document).ready(function() {
    $("#zoom_01").elevateZoom();
    $("#zoom_02").elevateZoom({ zoomType	: "inner", cursor: "crosshair" });
    $("#zoom_03").elevateZoom({ zoomType	: "lens", lensShape : "round", lensSize : 200 });
    $("#zoom_04").elevateZoom({scrollZoom : true, zoomWindowPosition: 11});
});
$(document).ready(function() {
    
    // Setup html5 version
    $("#uploader").pluploadQueue({
        // General settings
        runtimes : 'html5,flash,silverlight,html4',
        url : "/examples/upload",
         
        chunk_size : '1mb',
        rename : true,
        dragdrop: true,
         
        filters : {
            // Maximum file size
            max_file_size : '10mb',
            // Specify what files to browse for
            mime_types: [
                {title : "Image files", extensions : "jpg,gif,png"},
                {title : "Zip files", extensions : "zip"}
            ]
        },
 
        // Resize images on clientside if we can
        resize: {
            width : 200,
            height : 200,
            quality : 90,
            crop: true // crop to exact dimensions
        },
 
 
        // Flash settings
        flash_swf_url : '/admin1/assets/plugins/plupload/js/Moxie.swf',
     
        // Silverlight settings
        silverlight_xap_url : '/admin1/assets/plugins/plupload/js/Moxie.xap'
    });
});
$(document).ready(function() {
    $('select').select2();
    
    $(".js-example-basic-multiple-limit").select2({
        maximumSelectionLength: 2
    });
    
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
    
    var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];
 
    $(".js-example-data-array").select2({
        data: data
    });
});
$(document).ready(function() {
    var $validator = $("#wizardForm").validate({
        rules: {
            exampleInputName: {
                required: true
            },
            exampleInputName2: {
                required: true
		    },
		    exampleInputEmail: {
                required: true,
                email: true
		    },
		    exampleInputPassword1: {
                required: true
		    },
		    exampleInputPassword2: {
                required: true,
                equalTo: '#exampleInputPassword1'
		    },
		    exampleInputProductName: {
                required: true
		    },
		    exampleInputProductId: {
                required: true
		    },
		    exampleInputQuantity: {
                required: true
            },
		    exampleInputCard: {
                required: true,
                number: true
		    },
		    exampleInputSecurity: {
                required: true,
                number: true
		    },
		    exampleInputHolder: {
                required: true
            },
		    exampleInputExpiration: {
                required: true,
                date: true
            },
		    exampleInputCsv: {
                required: true,
                number: true
            }
        }
    });
 
    $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-tabs',
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
        },
        'onNext': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
        'onTabClick': function(tab, navigation, index) {
            var $valid = $("#wizardForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
            }
        },
    });
    
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});
$(function(){
    //ajax mocks
    $.mockjaxSettings.responseTime = 500; 
    
    $.mockjax({
        url: '/post',
        response: function(settings) {
            log(settings, this);
        }
    });

    $.mockjax({
        url: '/error',
        status: 400,
        statusText: 'Bad Request',
        response: function(settings) {
            this.responseText = 'Please input correct value'; 
            log(settings, this);
        }        
    });
    
    $.mockjax({
        url: '/status',
        status: 500,
        response: function(settings) {
            this.responseText = 'Internal Server Error';
            log(settings, this);
        }        
    });
  
    $.mockjax({
        url: '/groups',
        response: function(settings) {
            this.responseText = [ 
             {value: 0, text: 'Guest'},
             {value: 1, text: 'Service'},
             {value: 2, text: 'Customer'},
             {value: 3, text: 'Operator'},
             {value: 4, text: 'Support'},
             {value: 5, text: 'Admin'}
           ];
           log(settings, this);
        }        
    });
    
    function log(settings, response) {
            var s = [], str;
            s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
            for(var a in settings.data) {
                if(settings.data[a] && typeof settings.data[a] === 'object') {
                    str = [];
                    for(var j in settings.data[a]) {str.push(j+': "'+settings.data[a][j]+'"');}
                    str = '{ '+str.join(', ')+' }';
                } else {
                    str = '"'+settings.data[a]+'"';
                }
                s.push(a + ' = ' + str);
            }
            s.push('RESPONSE: status = ' + response.status);

            if(response.responseText) {
                if($.isArray(response.responseText)) {
                    s.push('[');
                    $.each(response.responseText, function(i, v){
                       s.push('{value: ' + v.value+', text: "'+v.text+'"}');
                    }); 
                    s.push(']');
                } else {
                   s.push($.trim(response.responseText));
                }
            }
            s.push('--------------------------------------\n');
            $('#console').val(s.join('\n') + $('#console').val());
    }    
  
   //defaults
   $.fn.editable.defaults.url = '/post'; 

            var c = window.location.href.match(/c=inline/i) ? 'inline' : 'popup';
            $.fn.editable.defaults.mode = c === 'inline' ? 'inline' : 'popup';

                $('#c').val(c);
    //enable / disable
   $('#enable').click(function() {
       $('#user .editable').editable('toggleDisabled');
   });    
    
    //editables 
    $('#username').editable({
           url: '/post',
           type: 'text',
           pk: 1,
           name: 'username',
           title: 'Enter username'
    });
    
    $('#firstname').editable({
        validate: function(value) {
           if($.trim(value) == '') return 'This field is required';
        }
    });
    
    $('#sex').editable({
        prepend: "not selected",
        source: [
            {value: 1, text: 'Male'},
            {value: 2, text: 'Female'}
        ],
        display: function(value, sourceData) {
             var colors = {"": "gray", 1: "green", 2: "blue"},
                 elem = $.grep(sourceData, function(o){return o.value == value;});
                 
             if(elem.length) {    
                 $(this).text(elem[0].text).css("color", colors[value]); 
             } else {
                 $(this).empty(); 
             }
        }   
    });    
    
    $('#status').editable();   
    
    $('#group').editable({
       showbuttons: false 
    });   

    $('#vacation').editable({
        datepicker: {
            todayBtn: 'linked'
        } 
    });  
        
    $('#dob').editable();
          
    $('#event').editable({
        placement: 'right',
        combodate: {
            firstItem: 'name'
        }
    });      
    
    $('#meeting_start').editable({
        format: 'yyyy-mm-dd hh:ii',    
        viewformat: 'dd/mm/yyyy hh:ii',
        validate: function(v) {
           if(v && v.getDate() == 10) return 'Day cant be 10!';
        },
        datetimepicker: {
           todayBtn: 'linked',
           weekStart: 1
        }        
    });            
    
    $('#comments').editable({
        showbuttons: 'bottom'
    }); 
    
    $('#note').editable(); 
    $('#pencil').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('#note').editable('toggle');
   });   
   
    $('#state').editable({
        source: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
    }); 
    
    $('#state2').editable({
        value: 'California',
        typeahead: {
            name: 'state',
            local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
        }
    });   
   
   $('#fruits').editable({
       pk: 1,
       limit: 3,
       source: [
        {value: 1, text: 'banana'},
        {value: 2, text: 'peach'},
        {value: 3, text: 'apple'},
        {value: 4, text: 'watermelon'},
        {value: 5, text: 'orange'}
       ]
    }); 
    
    $('#tags').editable({
        inputclass: 'input-large',
        select2: {
            tags: ['html', 'javascript', 'css', 'ajax'],
            tokenSeparators: [",", " "]
        }
    });   

    var countries = [];
    $.each({"BD": "Bangladesh", "BE": "Belgium", "BF": "Burkina Faso", "BG": "Bulgaria", "BA": "Bosnia and Herzegovina", "BB": "Barbados", "WF": "Wallis and Futuna", "BL": "Saint Bartelemey", "BM": "Bermuda", "BN": "Brunei Darussalam", "BO": "Bolivia", "BH": "Bahrain", "BI": "Burundi", "BJ": "Benin", "BT": "Bhutan", "JM": "Jamaica", "BV": "Bouvet Island", "BW": "Botswana", "WS": "Samoa", "BR": "Brazil", "BS": "Bahamas", "JE": "Jersey", "BY": "Belarus", "O1": "Other Country", "LV": "Latvia", "RW": "Rwanda", "RS": "Serbia", "TL": "Timor-Leste", "RE": "Reunion", "LU": "Luxembourg", "TJ": "Tajikistan", "RO": "Romania", "PG": "Papua New Guinea", "GW": "Guinea-Bissau", "GU": "Guam", "GT": "Guatemala", "GS": "South Georgia and the South Sandwich Islands", "GR": "Greece", "GQ": "Equatorial Guinea", "GP": "Guadeloupe", "JP": "Japan", "GY": "Guyana", "GG": "Guernsey", "GF": "French Guiana", "GE": "Georgia", "GD": "Grenada", "GB": "United Kingdom", "GA": "Gabon", "SV": "El Salvador", "GN": "Guinea", "GM": "Gambia", "GL": "Greenland", "GI": "Gibraltar", "GH": "Ghana", "OM": "Oman", "TN": "Tunisia", "JO": "Jordan", "HR": "Croatia", "HT": "Haiti", "HU": "Hungary", "HK": "Hong Kong", "HN": "Honduras", "HM": "Heard Island and McDonald Islands", "VE": "Venezuela", "PR": "Puerto Rico", "PS": "Palestinian Territory", "PW": "Palau", "PT": "Portugal", "SJ": "Svalbard and Jan Mayen", "PY": "Paraguay", "IQ": "Iraq", "PA": "Panama", "PF": "French Polynesia", "BZ": "Belize", "PE": "Peru", "PK": "Pakistan", "PH": "Philippines", "PN": "Pitcairn", "TM": "Turkmenistan", "PL": "Poland", "PM": "Saint Pierre and Miquelon", "ZM": "Zambia", "EH": "Western Sahara", "RU": "Russian Federation", "EE": "Estonia", "EG": "Egypt", "TK": "Tokelau", "ZA": "South Africa", "EC": "Ecuador", "IT": "Italy", "VN": "Vietnam", "SB": "Solomon Islands", "EU": "Europe", "ET": "Ethiopia", "SO": "Somalia", "ZW": "Zimbabwe", "SA": "Saudi Arabia", "ES": "Spain", "ER": "Eritrea", "ME": "Montenegro", "MD": "Moldova, Republic of", "MG": "Madagascar", "MF": "Saint Martin", "MA": "Morocco", "MC": "Monaco", "UZ": "Uzbekistan", "MM": "Myanmar", "ML": "Mali", "MO": "Macao", "MN": "Mongolia", "MH": "Marshall Islands", "MK": "Macedonia", "MU": "Mauritius", "MT": "Malta", "MW": "Malawi", "MV": "Maldives", "MQ": "Martinique", "MP": "Northern Mariana Islands", "MS": "Montserrat", "MR": "Mauritania", "IM": "Isle of Man", "UG": "Uganda", "TZ": "Tanzania, United Republic of", "MY": "Malaysia", "MX": "Mexico", "IL": "Israel", "FR": "France", "IO": "British Indian Ocean Territory", "FX": "France, Metropolitan", "SH": "Saint Helena", "FI": "Finland", "FJ": "Fiji", "FK": "Falkland Islands (Malvinas)", "FM": "Micronesia, Federated States of", "FO": "Faroe Islands", "NI": "Nicaragua", "NL": "Netherlands", "NO": "Norway", "NA": "Namibia", "VU": "Vanuatu", "NC": "New Caledonia", "NE": "Niger", "NF": "Norfolk Island", "NG": "Nigeria", "NZ": "New Zealand", "NP": "Nepal", "NR": "Nauru", "NU": "Niue", "CK": "Cook Islands", "CI": "Cote d'Ivoire", "CH": "Switzerland", "CO": "Colombia", "CN": "China", "CM": "Cameroon", "CL": "Chile", "CC": "Cocos (Keeling) Islands", "CA": "Canada", "CG": "Congo", "CF": "Central African Republic", "CD": "Congo, The Democratic Republic of the", "CZ": "Czech Republic", "CY": "Cyprus", "CX": "Christmas Island", "CR": "Costa Rica", "CV": "Cape Verde", "CU": "Cuba", "SZ": "Swaziland", "SY": "Syrian Arab Republic", "KG": "Kyrgyzstan", "KE": "Kenya", "SR": "Suriname", "KI": "Kiribati", "KH": "Cambodia", "KN": "Saint Kitts and Nevis", "KM": "Comoros", "ST": "Sao Tome and Principe", "SK": "Slovakia", "KR": "Korea, Republic of", "SI": "Slovenia", "KP": "Korea, Democratic People's Republic of", "KW": "Kuwait", "SN": "Senegal", "SM": "San Marino", "SL": "Sierra Leone", "SC": "Seychelles", "KZ": "Kazakhstan", "KY": "Cayman Islands", "SG": "Singapore", "SE": "Sweden", "SD": "Sudan", "DO": "Dominican Republic", "DM": "Dominica", "DJ": "Djibouti", "DK": "Denmark", "VG": "Virgin Islands, British", "DE": "Germany", "YE": "Yemen", "DZ": "Algeria", "US": "United States", "UY": "Uruguay", "YT": "Mayotte", "UM": "United States Minor Outlying Islands", "LB": "Lebanon", "LC": "Saint Lucia", "LA": "Lao People's Democratic Republic", "TV": "Tuvalu", "TW": "Taiwan", "TT": "Trinidad and Tobago", "TR": "Turkey", "LK": "Sri Lanka", "LI": "Liechtenstein", "A1": "Anonymous Proxy", "TO": "Tonga", "LT": "Lithuania", "A2": "Satellite Provider", "LR": "Liberia", "LS": "Lesotho", "TH": "Thailand", "TF": "French Southern Territories", "TG": "Togo", "TD": "Chad", "TC": "Turks and Caicos Islands", "LY": "Libyan Arab Jamahiriya", "VA": "Holy See (Vatican City State)", "VC": "Saint Vincent and the Grenadines", "AE": "United Arab Emirates", "AD": "Andorra", "AG": "Antigua and Barbuda", "AF": "Afghanistan", "AI": "Anguilla", "VI": "Virgin Islands, U.S.", "IS": "Iceland", "IR": "Iran, Islamic Republic of", "AM": "Armenia", "AL": "Albania", "AO": "Angola", "AN": "Netherlands Antilles", "AQ": "Antarctica", "AP": "Asia/Pacific Region", "AS": "American Samoa", "AR": "Argentina", "AU": "Australia", "AT": "Austria", "AW": "Aruba", "IN": "India", "AX": "Aland Islands", "AZ": "Azerbaijan", "IE": "Ireland", "ID": "Indonesia", "UA": "Ukraine", "QA": "Qatar", "MZ": "Mozambique"}, function(k, v) {
        countries.push({id: k, text: v});
    }); 
    $('#country').editable({
        source: countries,
        select2: {
            width: 200,
            placeholder: 'Select country',
            allowClear: true
        } 
    });      


    
    $('#address').editable({
        url: '/post',
        value: {
            city: "Moscow", 
            street: "Lenina", 
            building: "12"
        },
        validate: function(value) {
            if(value.city == '') return 'city is required!'; 
        },
        display: function(value) {
            if(!value) {
                $(this).empty();
                return; 
            }
            var html = '<b>' + $('<div>').text(value.city).html() + '</b>, ' + $('<div>').text(value.street).html() + ' st., bld. ' + $('<div>').text(value.building).html();
            $(this).html(html); 
        }         
    });              
         
   $('#user .editable').on('hidden', function(e, reason){
        if(reason === 'save' || reason === 'nochange') {
            var $next = $(this).closest('tr').next().find('.editable');
            if($('#autoopen').is(':checked')) {
                setTimeout(function() {
                    $next.editable('show');
                }, 300); 
            } else {
                $next.focus();
            } 
        }
   });
});
$(function(){			
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
});
$( document ).ready(function() {
    var hiddenMailOptions = function() {
        if($('.checkbox-mail:checked').length) {
            $('.mail-hidden-options').css('display', 'inline-block');
        } else {
            $('.mail-hidden-options').css('display', 'none');
        };
    };
    
    hiddenMailOptions();
    
    $('.check-mail-all').click(function () {
        $('.checkbox-mail').click();
    });
    
    $('.checkbox-mail').each(function() {
        $(this).click(function() {
            if($(this).closest('tr').hasClass("checked")){
                $(this).closest('tr').removeClass('checked');
                hiddenMailOptions();
            } else {
                $(this).closest('tr').addClass('checked');
                hiddenMailOptions();
            }
        });
    });
    
    $('.mailbox-content table tr td').not(":first-child").on('click', function(e) {
        e.stopPropagation();
        e.preventDefault();

        window.location = "message-view-alt.html";
    });
});

$( document ).ready(function() {
    var hiddenMailOptions = function() {
        if($('.checkbox-mail:checked').length) {
            $('.mail-hidden-options').css('display', 'inline-block');
        } else {
            $('.mail-hidden-options').css('display', 'none');
        };
    };
    
    hiddenMailOptions();
    
    $('.check-mail-all').click(function () {
        $('.checkbox-mail').click();
    });
    
    $('.checkbox-mail').each(function() {
        $(this).click(function() {
            if($(this).closest('tr').hasClass("checked")){
                $(this).closest('tr').removeClass('checked');
                hiddenMailOptions();
            } else {
                $(this).closest('tr').addClass('checked');
                hiddenMailOptions();
            }
        });
    });
    
    $('.mailbox-content table tr td').not(":first-child").on('click', function(e) {
        e.stopPropagation();
        e.preventDefault();

        window.location = "message-view.html";
    });
});

$( document ).ready(function() {
    // Basic
    $('#basicTree').jstree({
		'core' : {
			'themes' : {
				'responsive': false
			}
		},
        'types' : {
            'default' : {
                'icon' : 'fa fa-folder icon-state-info icon-md'
            },
            'file' : {
                'icon' : 'fa fa-file icon-state-default icon-md'
            }
        },
        'plugins' : ['types']
    });
    
    // Checkbox
    $('#checkTree').jstree({
		'core' : {
			'themes' : {
				'responsive': false
			}
		},
        'types' : {
            'default' : {
                'icon' : 'fa fa-folder icon-state-info icon-md'
            },
            'file' : {
                'icon' : 'fa fa-file icon-state-default icon-md'
            }
        },
        'plugins' : ['types', 'checkbox']
    });
    
    // Drag & Drop
    $('#dragTree').jstree({
		'core' : {
			'check_callback' : true,
			'themes' : {
				'responsive': false
			}
		},
        'types' : {
            'default' : {
                'icon' : 'fa fa-folder icon-state-info icon-md'
            },
            'file' : {
                'icon' : 'fa fa-file icon-state-default icon-md'
            }
        },
        'plugins' : ['types', 'dnd']
    });
    
    // Ajax
    $('#ajaxTree').jstree({
		'core' : {
			'check_callback' : true,
			'themes' : {
				'responsive': false
			},
            'data' : {
                'url' : function (node) {
                    return node.id === '#' ? 'assets/js/pages/ajax_roots.json' : 'assets/js/pages/ajax_children.json';
                },
                'data' : function (node) {
                    return { 'id' : node.id };
                }
            }
        },
        "types" : {
            'default' : {
                'icon' : 'fa fa-folder icon-state-info icon-md'
            },
            'file' : {
                'icon' : 'fa fa-file icon-state-default icon-md'
            }
        },
        "plugins" : [ "contextmenu", "dnd", "search", "state", "types", "wholerow" ]
    });
});
$(document).ready(function(){
    var pageHeight = $('body').height();
    $('.login-box').css('height', pageHeight);
    
    $(window).resize(function(){
        var pageHeight = $('body').height();
        $('.login-box').css('height', pageHeight);
    });
    var pageHeight = $('body').height();
    $('.register-box').css('height', pageHeight);
    
    $(window).resize(function(){
        var pageHeight = $('body').height();
        $('.register-box').css('height', pageHeight);
    });
});
$( document ).ready(function() {
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(27.284836,-81.075513),
            zoom: 9
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
});

$( document ).ready(function() {
    jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: '#fff',
        borderColor: '#fff',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#e7e7e7',
        enableZoom: true,
        hoverColor: '#c9dfaf',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#c9dfaf',
        selectedRegion: null,
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            var message = 'You clicked "'
            + region 
            + '" which has the code: '
            + code.toUpperCase();
            
            alert(message);
        },
        markers: [
            {latLng: [41.90, 12.45], name: 'Vatican City'},
            {latLng: [43.73, 7.41], name: 'Monaco'},
            {latLng: [-0.52, 166.93], name: 'Nauru'},
            {latLng: [-8.51, 179.21], name: 'Tuvalu'}
        ]

    });
});
$( document ).ready(function() {
    // Nestable
    var updateOutput = function(e) {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };
    
    $('#nestable').nestable({group: 1}).on('change', updateOutput);
    
    $('#nestable2').nestable({group: 1}).on('change', updateOutput);
    
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    updateOutput($('#nestable2').data('output', $('#nestable2-output')));

    $('#nestable-menu').on('click', function(e)  {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();
});
$( document ).ready(function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;

        var getMessage = function () {
            var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://johnpapa.net" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
                'Are you the six fingered man?',
                'Inconceivable!',
                'I do not think that means what you think it means.',
                'Have fun storming the castle!'
            ];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function (msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
            return msg;
        };

        $('#showtoast').click(function () {
            var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
            var msg = $('#message').val();
            var title = $('#title').val() || '';
            var $showDuration = $('#showDuration');
            var $hideDuration = $('#hideDuration');
            var $timeOut = $('#timeOut');
            var $extendedTimeOut = $('#extendedTimeOut');
            var $showEasing = $('#showEasing');
            var $hideEasing = $('#hideEasing');
            var $showMethod = $('#showMethod');
            var $hideMethod = $('#hideMethod');
            var toastIndex = toastCount++;
            var addClear = $('#addClear').prop('checked');

            toastr.options = {
                closeButton: $('#closeButton').prop('checked'),
                debug: $('#debugInfo').prop('checked'),
                newestOnTop: $('#newestOnTop').prop('checked'),
                progressBar: $('#progressBar').prop('checked'),
                positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                preventDuplicates: $('#preventDuplicates').prop('checked'),
                onclick: null
            };

            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function () {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            if ($showDuration.val().length) {
                toastr.options.showDuration = $showDuration.val();
            }

            if ($hideDuration.val().length) {
                toastr.options.hideDuration = $hideDuration.val();
            }

            if ($timeOut.val().length) {
                toastr.options.timeOut = addClear ? 0 : $timeOut.val();
            }

            if ($extendedTimeOut.val().length) {
                toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
            }

            if ($showEasing.val().length) {
                toastr.options.showEasing = $showEasing.val();
            }

            if ($hideEasing.val().length) {
                toastr.options.hideEasing = $hideEasing.val();
            }

            if ($showMethod.val().length) {
                toastr.options.showMethod = $showMethod.val();
            }

            if ($hideMethod.val().length) {
                toastr.options.hideMethod = $hideMethod.val();
            }

            if (addClear) {
                msg = getMessageWithClearButton(msg);
                toastr.options.tapToDismiss = false;
            }
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text('Command: toastr["'
                    + shortCutFunction
                    + '"]("'
                    + msg
                    + (title ? '", "' + title : '')
                    + '")\n\ntoastr.options = '
                    + JSON.stringify(toastr.options, null, 2)
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if(typeof $toast === 'undefined'){
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function () {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function () {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function () {
                    toastr.clear($toast, { force: true });
                });
            }
        });

        function getLastToast(){
            return $toastlast;
        }
        $('#clearlasttoast').click(function () {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function () {
            toastr.clear();
        });
});
$( document ).ready(function() {
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(40.7033127,-73.979681,10),
            zoom: 9
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
});

$( document ).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-bottom-right',
            showMethod: 'fadeIn',
            hideMethod: 'fadeOut',
            timeOut: 5000
        };
        toastr.info('You have 5 items in your cart. Continue shopping on the top right corner');
    }, 1800);
    [].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
					var openCtrl = el.querySelector( '.checkout__button' ),
						closeCtrls = el.querySelectorAll( '.checkout__cancel' );

					openCtrl.addEventListener( 'click', function(ev) {
						ev.preventDefault();
						classie.add( el, 'checkout--active' );
					} );

					[].slice.call( closeCtrls ).forEach( function( ctrl ) {
						ctrl.addEventListener( 'click', function() {
							classie.remove( el, 'checkout--active' );
                        } );
                    } );
    } );
});
$(document).ready(function() {

    // Datatables

    $('#example').dataTable();

    var table = $('#equipment-list').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [
            [2, 'asc']
        ],
        "displayLength": 25,
    });

    // Order by the grouping
    $('#example2 tbody').on('click', 'tr.group', function() {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([2, 'desc']).draw();
        } else {
            table.order([2, 'asc']).draw();
        }
    });

    $.fn.isValid = function() {
        return this[0].checkValidity()
    }

    var t = $('#example3').DataTable();

    $('#add-row').on('click', function() {
        if ($("#add-row-form").isValid()) {
            var name = $('#name-input').val(),
                position = $('#position-input').val(),
                age = $('#age-input').val(),
                date = $('#date-input').val(),
                salary = $('#salary-input').val();
            t.row.add([
                name,
                position,
                age,
                date,
                '$' + salary
            ]).draw();

            $('.modal').modal('hide');

            return false;
        }
    });

    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});
$( document ).ready(function() {
    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(27.284836,-81.075513),
            zoom: 9
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions); 
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    
});

$( document ).ready(function() {
    var todo = function() { 
        $('.todo-list .todo-item input').click(function() {
        if($(this).is(':checked')) {
            $(this).parent().parent().parent().toggleClass('complete');
        } else {
            $(this).parent().parent().parent().toggleClass('complete');
        }
    });
    
    $('.todo-nav .all-task').click(function() {
        $('.todo-list').removeClass('only-active');
        $('.todo-list').removeClass('only-complete');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.todo-nav .active-task').click(function() {
        $('.todo-list').removeClass('only-complete');
        $('.todo-list').addClass('only-active');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.todo-nav .completed-task').click(function() {
        $('.todo-list').removeClass('only-active');
        $('.todo-list').addClass('only-complete');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('#uniform-all-complete input').click(function() {
        if($(this).is(':checked')) {
            $('.todo-item .checker span:not(.checked) input').click();
        } else {
            $('.todo-item .checker span.checked input').click();
        }
    });
    
    $('.remove-todo-item').click(function() {
        $(this).parent().remove();
    });
    };
    
    todo();
    
    $(".add-task").keypress(function (e) {
        if ((e.which == 13)&&(!$(this).val().length == 0)) {
            $('<div class="todo-item added"><input type="checkbox"><span class="todo-description">' + $(this).val() + '</span><a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="icon-close"></i></a></div>').insertAfter('.todo-list .todo-item:last-child');
            $(this).val('');
        } else if(e.which == 13) {
            alert('Please enter new task');
        }
        $('.todo-list .todo-item.added input').uniform();
        $('.todo-list .todo-item.added input').click(function() {
            if($(this).is(':checked')) {
                $(this).parent().parent().parent().toggleClass('complete');
            } else {
                $(this).parent().parent().parent().toggleClass('complete');
            }
        });
        $('.todo-list .todo-item.added .remove-todo-item').click(function() {
            $(this).parent().remove();
        });
    });
});
$(document).ready(function () {
    $("#range_01").ionRangeSlider();
    
    $("#range_02").ionRangeSlider({
        min: 100,
        max: 1000,
        from: 550
    });
    
    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });
   
    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });
    
    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500,
        step: 250
    });
    
    $("#range_06").ionRangeSlider({
        grid: true,
        from: 3,
        values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    });
    
    $("#range_07").ionRangeSlider({
        grid: true,
        min: 1000,
        max: 1000000,
        from: 200000,
        step: 1000,
        prettify_enabled: true
    });
    
    $("#range_08").ionRangeSlider({
        min: 100,
        max: 1000,
        from: 550,
        disable: true
    });
});