{{-- <x-app-guest-layout>
    <main>

        <section class="content-container mt-8">
            <div class="wrapper">
                <div class="container">
                    <div id="seat-map" class="seat-panel">
                        <div class="front-indicator">Front</div>
                        
                    </div>
                    
                    <div class="booking-details">
                        <h2>Booking Details</h2>
                        
                        <h3> Selected Seats (<span id="counter">0</span>):</h3>
                        <ul id="selected-seats"></ul>
                        
                        Total: <b>$<span id="total">0</span></b>
                        
                        <button class="checkout-button element">Checkout &raquo;</button>
                        
                        <div id="legend"></div>
                    </div>
                </div>
            </div>
          
        </section>
    </main>
</x-app-guest-layout> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/lib/jquery.seat-charts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/lib/bootstrap-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/lib/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Bus Booking Admin Dashboard</title>
</head>
<body>

@include('templates.header_nav')
    
</div>
<script src="{{ asset('js/lib/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/lib/jquery.seat-charts.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap.js') }}"></script>
<script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/lib/angular.min.js') }}"></script>
<script src="{{ asset('js/booking.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html> --}}

@include('layouts.header')

<main>
    <section class="content-container my-5">
        <div class="wrapper">
            <div class="container-seats">
                <div id="seat-map" class="seat-panel">
                    <div class="front-indicator">Front</div>
                    
                </div>
                
                <div class="booking-details ms-5">
                    <h2>Booking Details</h2>
                    
                    <h3> Selected Seats (<span id="counter">0</span>):</h3>
                    <ul id="selected-seats"></ul>
                    
                    Total: <b>$<span id="total">0</span></b>
                    
                    <button class="checkout-button element">Checkout &raquo;</button>
                    
                    <div id="legend"></div>
                </div>
            </div>
        </div>
      
    </section>
</main>

@include('layouts.footer')
