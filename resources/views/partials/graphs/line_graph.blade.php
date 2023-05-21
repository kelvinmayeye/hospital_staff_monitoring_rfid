<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Weekly Patient Attedance"
            },
            axisY: {
                title: "Total attended Patients",
                valueFormatString: "#0 ",
                suffix: "people",
                prefix: ""
            },
            data: [{
                    type: "spline",
                    markerSize: 7,
                    xValueFormatString: "ddd",
                    yValueFormatString: "$#,##0",
                    xValueType: "dateTime",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                },
                {
                    type: "labels",
                    labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",
                        "Sunday"
                    ]
                }
            ]
        });

        chart.render();
    };
</script>
