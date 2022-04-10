<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Airline tickets</h1>
            <form class="d-flex" method="get" action="{{url('search')}}">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="text" placeholder="London" aria-label="London" name="s" id="s" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>
            <style>
                .market-header .d-flex .form-control.is-invalid {
                    border: 2px solid red;
                }
            </style>

            <p class="lead text-muted"> Дешёвые авиабилеты на популярные направления </p>
        </div>
    </div>
</section>
