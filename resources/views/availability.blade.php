
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
        <section class="content-container">
            <div class="availability-table">
                <table>
                    <thead>
                        <tr>
                            <th>Route</th>
                            <th>Departure Time</th>
                            <th>Available Seats</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>City A to City B</td>
                            <td>2023-01-01 08:00 AM</td>
                            <td>20</td>
                            <td>Active</td>
                            <td>
                                <button class="element">Edit</button>
                                <button class="element">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>