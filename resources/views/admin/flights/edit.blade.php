@extends('admin.layouts.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование рейса</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-gray-dark">
            <div class="card-header">
                <h3 class="card-title">Рейс "{{$flight->Destination}}"</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('Flights.update', ['Flight' => $flight->id]) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="Destination">Пункт назначения</label>
                        <input type="text" name="Destination" class="form-control @error('Destination') is-invalid @enderror" id="Destination" value="{{ $flight->Destination }}">
                    </div>
                    <div class="form-group">
                        <label for="Departure">Пункт отправления </label>
                        <input type="text" name="Departure" class="form-control @error('Departure') is-invalid @enderror" id="Departure" value="{{ $flight->Departure }}">
                    </div>
                    <div class="form-group">
                        <label for="TravelTime">Время в пути</label>
                        <input type="time" name="TravelTime" class="form-control @error('TravelTime') is-invalid @enderror" id="TravelTime" value="{{ $flight->TravelTime }}">
                    </div>
                    <div class="form-group">
                        <label for="DepartureDates">Время и дата вылета</label>
                        <input type="datetime-local" name="DepartureDates" id="DepartureDates" value="{{ $flight->DepartureDates}}" class="form-control @error('DepartureDates') is-invalid @enderror">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                    <button type="submit" class="btn btn-dark">Сохранить</button>
                </div>
            </form>
        </div>
    </section>
@endsection


