<x-app-layout>
    <main>
        <section class="content-container mt-12">
            <div class="booking-table">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Bus Number</th>
                            <th>Seat Numbers</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Bus-123</td>
                            <td>1A, 2B</td>
                            <td>2023-01-01</td>
                            <td>Confirmed</td>
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
</x-app-layout>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>

@include('templates.header_nav')

    
</div>

<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html> --}}