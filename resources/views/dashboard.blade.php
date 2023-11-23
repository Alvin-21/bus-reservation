<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <main>
        
        <section class="content-container">
            <div class="content-item">
                <div class="icon"><a href="bookings">📅</a></div>
                <h2>Bookings</h2>
                <a href="bookings">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="report">📈</a></div>
                <h2>Report</h2>
                <a href="report">View Details</a>
            </div>

            <!-- <div class="content-item">
                <div class="icon">💼</div>
                <h2>Account</h2>
                <a href="#">View Details</a>
            </div> -->

            <div class="content-item">
                <div class="icon"><a href="buses">🚌</a></div>
                <h2>Buses</h2>
                <a href="buses">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="seats">💺</a></div>
                <h2>Seats</h2>
                <a href="seats">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="availability">📊</a></div>
                <h2>Availability</h2>
                <a href="availability">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="routes">🛣️</a></div>
                <h2>Routes</h2>
                <a href="routes">View Details</a>
            </div>
        </section>
    </main>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>
    
{{-- @include('templates.header_nav') --}}



    {{-- <main>
        <br> <br> <br> <br> <br> 
        <section class="content-container">
            <div class="content-item">
                <div class="icon"><a href="bookings">📅</a></div>
                <h2>Bookings</h2>
                <a href="bookings">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="report">📈</a></div>
                <h2>Report</h2>
                <a href="report">View Details</a>
            </div>

            <!-- <div class="content-item">
                <div class="icon">💼</div>
                <h2>Account</h2>
                <a href="#">View Details</a>
            </div> -->

            <div class="content-item">
                <div class="icon"><a href="buses">🚌</a></div>
                <h2>Buses</h2>
                <a href="buses">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="seats">💺</a></div>
                <h2>Seats</h2>
                <a href="seats">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="availability">📊</a></div>
                <h2>Availability</h2>
                <a href="availability">View Details</a>
            </div>

            <div class="content-item">
                <div class="icon"><a href="routes">🛣️</a></div>
                <h2>Routes</h2>
                <a href="routes">View Details</a>
            </div>
        </section>
    </main> --}}
</div>

<script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>