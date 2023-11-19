
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>

@include('templates.header_nav')

    <main>
        <br> <br> <br> <br> <br> 
        <section class="content-container_report">
            <div class="report-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2023-01-01</td>
                            <td>Financial</td>
                            <td>Monthly Revenue Report</td>
                            <td>
                                <button>View</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <br><br><br><br>
            <div class="report-chart">
                <canvas id="myChart"></canvas>
            </div>
        </section>
    </main>
</div>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>
<script src="{{ asset('js/chart-script.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>


</body>
</html>