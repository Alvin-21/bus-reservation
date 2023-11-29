$(document).ready(function () {
    // Toggles occupation options when admin or employee is selected
    $("#bar-graph").click(function () {
        $("#pieChart").hide();
        $("#lineGraph").hide();
        $("#myChart").show();
    });

    $("#pie-chart").click(function () {
        $("#pieChart").show();
        $("#lineGraph").hide();
        $("#myChart").hide();
    });
    
    $("#line-graph").click(function () {
        $("#pieChart").hide();
        $("#lineGraph").show();
        $("#myChart").hide();
    });
});