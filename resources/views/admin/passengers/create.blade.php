@extends('admin.layouts.layout')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Регистрация пассажира</h1>
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
                <h3 class="card-title">Регистрация пассажира</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('Passengers.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="Name">ФИО</label>
                        <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror" id="Name" placeholder="ФИО">
                    </div>
                    <div class="form-group">
                        <label for="Passport">Номер паспорта </label>
                        <input type="number" name="Passport" class="form-control @error('Passport') is-invalid @enderror" id="Passport" placeholder="Номер паспорта">
                    </div>
                    <div class="form-group">
                        <label for="Telephone">Номер телефона</label>
                        <input type="number" name="Telephone" class="form-control @error('Telephone') is-invalid @enderror" id="Telephone" placeholder="Номер телефона">
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




