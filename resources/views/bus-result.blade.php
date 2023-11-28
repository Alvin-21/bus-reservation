@include('layouts.header')

<div class="container">
    @foreach($buses as $bus)
    <div class="row d-flex justify-content-center">
        <div class="card col-md-6 border-secondary my-3">
            <div class="card-header bg-white d-flex justify-content-center">
                <style>
                    .result {
                        color: black;
                        text-decoration: none
                    }

                    .result:hover {
                        color: #0056b3;
                    }

                </style>
                <a href="seats" class="result">
                    <span class="pe-2">1</span>
                    <span>{{ $bus->type }} bus</span>
                </a>
            </div>
            <div class="card-body text-secondary">
                <div class="card-text d-flex justify-content-between">
                    <span>{{ $bus->source }}</span>
                    <span>{{ $bus->destination }}</span>
                </div>
                <hr>
                <div class="card-text d-flex justify-content-between">
                    <span>Departure</span>
                    <span>{{ $bus->departure }}</span>
                </div>
                <hr>
                <div class="card-text d-flex justify-content-between">
                    <span>Seats</span>
                    <span>{{ $bus->seats }}</span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@include('layouts.footer')

