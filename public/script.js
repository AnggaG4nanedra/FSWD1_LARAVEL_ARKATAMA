document.addEventListener("DOMContentLoaded", function() {
    // Dummy data for chart
    var data = {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
        series: [
            {
                name: 'Sales',
                data: [30, 40, 35, 50, 49]
            },
            {
                name: 'Profit',
                data: [10, 20, 15, 25, 22]
            }
        ]
    };

    // Chart configuration
    var options = {
        chart: {
            type: 'bar',
            height: 400
        },
        series: data.series,
        xaxis: {
            categories: data.categories
        }
    };

    // Initialize chart
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
});
