var skillcapabilitygap = {
    labels: ["Storm - Heights", "Storm - Ground", "Chainsaw - Crosscut", "Chainsaw - Advanced", "Flood Rescue - L1", "Flood Rescue - L2", "Flood Rescue - L3"],
    datasets: [{
            label: "Target",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [65, 59, 90, 81, 56, 55, 40]
        },
        {
            label: "Current",
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

var ccap1 = $("#skill-capability-gap");
var myRadarChart = new Chart(ccap1, {
    type: 'radar',
    data: skillcapabilitygap,
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var data4 = {
    datasets: [{
        data: [
            43,
            37,
            65,
            3,
            14,
            65
        ],
        backgroundColor: [
            "#FF6384",
            "#4BC0C0",
            "#FFCE56",
            "#E7E9ED",
            "#36A2EB",
            "#f48603"
        ],
        label: 'My dataset' // for legend
    }],
    labels: [
        "PIARO",
        "Storm",
        "Chainsaw",
        "Flood Boat",
        "Flood Rescue",
        "Land Search"
    ]
};

var ctx4 = $("#skill-capability-dist");
new Chart(ctx4, {
    data: data4,
    type: 'polarArea',
});