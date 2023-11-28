@include('layouts.header')

<main>
    <section class="content-container my-5" id="seats-section">
        <div class="wrapper">
            <div class="container-seats">
                <div id="seat-map" class="seat-panel">
                    <div class="front-indicator">Front</div>
                    
                </div>

                <div class="booking-details ms-5">
                    <h2>Booking Details</h2>
                    
                    <h3> Selected Seats (<span id="counter">0</span>):</h3>
                    {{-- <ul id="selected-seats"></ul> --}}
                    
                    <b>
                        {{-- $<span id="total">0</span> --}}
                    </b>
                    
                    
                    <button id="confirm-booking" class="checkout-button element">Confirm Booking &raquo;</button>
                    
                    <div id="legend"></div>
                </div>
            </div>
        </div>
      
    </section>

    <section id="checkout-section" style="display: none">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
        
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        
            body {
                /* background-image: none; */
            }
        
        </style>
        
        <div class="container">
            <div class="row my-5">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Booking Details</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3" id="selected-seats">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$<span id="total">0</span></strong>
                        </li>
                    </ul>
        
                    {{-- <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form> --}}
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
        
                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
        
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
        
                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>
        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="county">County</label>
                                <input type="text" class="form-control" id="county" placeholder="" required>
                                <div class="invalid-feedback">
                                    County address required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="loaction" placeholder="" required>
                                <div class="invalid-feedback">
                                    Location address required.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="postal">Postal Code</label>
                                <input type="text" class="form-control" id="postal" placeholder="" required>
                                <div class="invalid-feedback">
                                    Postal code required.
                                </div>
                            </div>
                        </div>
        
                        <hr class="mb-4">
        
                        <h4 class="mb-3">Payment</h4>
        
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="mm/yy" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm Payment</button>
        
                        <!-- Modal -->
                        <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="paymentModalLabel">Payment Confirmation</h1>
                                        <button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="text-success">Your payment has been received successfully.</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modal-close" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                (function() {
                    'use strict'
        
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation')
        
                        // Loop over them and prevent submission
                        Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault()
                                }
                                if (form.checkValidity() === true) {
                                    event.preventDefault()
                                    // event.stopPropagation()
                                    $("#paymentModal").modal("show")
                                    $(".modal-close").click(function() {
                                        location.replace("/");
                                    });
                                }
        
                                form.classList.add('was-validated')
                            }, false)
                        })
                    }, false)
                })()
        
            </script>
        </div>
    </section>
</main>

@include('layouts.footer')
