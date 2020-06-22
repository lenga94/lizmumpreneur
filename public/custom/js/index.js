var currentContractsTable;
var expiredContractsTable;
var lapsedContractsTable;

$(document).ready(function() {


    //current contracts table
    currentContractsTable = $("#currentContractsTable").DataTable({
        'ajax': 'get-all-current-contracts',
        'order': []
    });

    //expired contracts table
    expiredContractsTable = $("#expiredContractsTable").DataTable({
        'ajax': 'get-all-expired-contracts',
        'order': []
    });

    //lapsed contracts table
    lapsedContractsTable = $("#lapsedContractsTable").DataTable({
        'ajax': 'get-all-lapsed-contracts',
        'order': []
    });


    //Calender functions
    $("#date-popover").popover({
        html: true,
        trigger: "manual"
    });
    $("#date-popover").hide();
    $("#date-popover").click(function(e) {
        $(this).hide();
    });

    $("#my-calendar").zabuto_calendar({
        action: function() {
            return myDateFunction(this.id, false);
        },
        action_nav: function() {
            return myNavFunction(this.id);
        },
        ajax: {
            url: "show_data.php?action=1",
            modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
        },
            {
                type: "block",
                label: "Regular event",
            }
        ]
    });

    //Chart display
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#ffffff';

    // Pie Chart
    var pie = document.getElementById("myPieChart");

    // Bar Chart
    var bar = document.getElementById("myBarChart");


    $.ajax({
        url: '/get-contracts-data/',
        type: 'GET',
        dataType: 'json',
        success: function(response) {

            var pieChartData = response.pie_chart_data;
            var barChartData = response.bar_chart_data;

            //Pie chart values
            var expiredCount = pieChartData.expired;
            var lapsedCount = pieChartData.lapsed;
            var currentCount = pieChartData.current;

            var myPieChart = new Chart(pie, {
                type: 'pie',
                data: {
                    labels: ["Expired", "Lapsed", "Current"],
                    datasets: [{
                        data: [expiredCount, lapsedCount, currentCount],
                        backgroundColor: ['#dc3545', '#ffc107', '#28a749'],
                    }],
                },
            });


            //Bar chart values
            var jan = barChartData.Jan;
            var feb = barChartData.Feb;
            var mar = barChartData.Mar;
            var apr = barChartData.Apr;
            var may = barChartData.May;
            var jun = barChartData.Jun;
            var jul = barChartData.Jul;
            var aug = barChartData.Aug;
            var sep = barChartData.Sep;
            var oct = barChartData.Oct;
            var nov = barChartData.Nov;
            var dec = barChartData.Dec;

            var myLineChart = new Chart(bar, {
                type: 'bar',
                data: {
                    labels: [
                        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                    ],
                    datasets: [{
                        label: "Expiring",
                        backgroundColor: "rgba(220, 53, 69, 1)",
                        borderColor: "rgba(220, 53, 69, 1)",
                        data: [
                            jan, feb, mar, apr, may, jun,
                            jul, aug, sep, oct, nov, dec,
                        ],
                    }],
                },
                options: {
                    maintainAspectRatio: true,
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 10,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });



        }// success
    });// ajax

});

function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
}
