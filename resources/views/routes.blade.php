<x-app-layout>
    <main>
        <section class="content-container mt-12">
            <div class="route-table">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th>Pickup Location</th>
                            <th>Destination</th>
                            <th>Distance</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($routes as $route)
                            <tr>
                                <td>{{ $route->source }}</td>
                                <td>{{ $route->destination }}</td>
                                <td>{{ $route->distance }} km</td>
                                <td>{{ $route->duration }} hours</td>
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