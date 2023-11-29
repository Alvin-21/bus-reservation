// Include your data and customize the chart accordingly
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Revenue',
            data: [1500, 2200, 1800, 2500, 2000],
            backgroundColor: ['#EE0000', '#77EE00', '#00EEEE', '#7700EE', '#FAF800'],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

var pieChart = document.getElementById('pieChart').getContext('2d');
var myChart = new Chart(pieChart, {
    type: 'pie',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Revenue',
            data: [1500, 2200, 1800, 2500, 2000],
            backgroundColor: ['#EE0000', '#77EE00', '#00EEEE', '#7700EE', '#FAF800'],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false
    }
});

var lineGraph = document.getElementById('lineGraph').getContext('2d');
var myChart = new Chart(lineGraph, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'],
        datasets: [{
            label: 'Monthly Revenue',
            data: [1500, 2200, 1800, 2500, 2000],
            backgroundColor: ['#EE0000', '#77EE00', '#00EEEE', '#7700EE', '#FAF800'],
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});