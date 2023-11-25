<x-app-layout>
    <main>
        <section class="content-container mt-12">
            <div class="bus-table">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th>Bus Number</th>
                            <th>Capacity</th>
                            <th>Model</th>
                            <th>Driver</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bus-123</td>
                            <td>50</td>
                            <td>Model A</td>
                            <td>John Doe</td>
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
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>

@include('templates.header_nav')

    
</div>

<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html> --}}