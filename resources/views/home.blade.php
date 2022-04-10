@extends('layouts.layout')

@section('header')
    @parent
@endsection

@section('content')


    <div class="Album py-5 bg-light">

        <div class="container">

                <div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#03033b"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">

                                </text></svg>

                            <div class="card-body">
                                <p class="card-text">

                             <br> Вылет

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>

                                    </div>
                                </div>
                            </div>
                                    <div class="col-md-12">

                                    </div>
                                <p class="alert alert-danger"> No flights found </p>

                        </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
