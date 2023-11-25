<x-app-layout>
    <main>
        <section class="content-container_report mt-12 ">
            <div class="report-table">
                <table class="bg-white">
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
                                <button class="element">Edit</button>
                                <button class="element">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <div class="report-chart mt-8">
                <canvas id="myChart"></canvas>
            </div>
        </section>
    </main>
</x-app-layout>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>

@include('templates.header_nav')

    
</div>
<script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>
<script src="{{ asset('js/chart-script.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>


</body>
</html> --}}