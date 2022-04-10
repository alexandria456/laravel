@extends('admin.layouts.layout')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Регистрация билета</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="card card-gray-dark">
            <div class="card-header">
                <h3 class="card-title">Регистрация билета</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('Tickets.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_Flight">Рейс</label>
                        <select class="form-control" id="id_Flight" name="id_Flight">
                            @foreach($flights as $k => $v)
                                <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="passengers">Пассажир</label>
                        <select class="form-control" id="passengers" name="passengers[]">
                            @foreach($passengers as $k => $v)
                            <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Seat">Место </label>
                        <input type="text" name="Seat" class="form-control @error('Seat') is-invalid @enderror" id="Seat" placeholder="Место">
                    </div>
                    <div class="form-group">
                        <label for="Price">Цена </label>
                        <input type="text" name="Price" class="form-control @error('Price') is-invalid @enderror" id="Price" placeholder="Цена">
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




