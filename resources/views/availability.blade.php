<x-app-layout>
    <main>
        <section class="content-container mt-12">
            <div class="availability-table">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th>Pickup Location</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Available Seats</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buses as $bus)
                            <tr>
                                <td>{{ $bus->source }}</td>
                                <td>{{ $bus->destination }}</td>
                                <td>{{ $bus->departure }}</td>
                                <td>{{ $bus->seats }}</td>
                                <td>
                                    <button class="element btn-custom">Edit</button>
                                    <button class="element btn-custom">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        
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