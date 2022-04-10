@extends('admin.layouts.layout')
@section('content')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Рейсы</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
            <!-- Default box -->
            <div class="card" >
                <div class="card-header">
                    <h3 class="card-title">Список рейсов</h3>

                    <div  class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('Flights.create')}}" class="btn btn-outline-primary mb-3">Добавить рейс</a>
                    @if (count($flights))
                        <div class="table-responsive" >
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 30px">#</th>
                                    <th>Пункт назначения</th>
                                    <th>Пункт отправления</th>
                                    <th>Время в пути</th>
                                    <th>Время и дата вылета</th>
                                    <th>Цена</th>
                                    <th>Редактировать</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($flights as $flight)
                                <tr>
                                    <td>{{$flight->id}}</td>
                                    <td>{{$flight->Destination}}</td>
                                    <td>{{$flight->Departure}}</td>
                                    <td>{{$flight->TravelTime}}</td>
                                    <td>{{$flight->DepartureDates}}</td>
                                    <td>{{$flight->Prices}}</td>

                                    <td><a href="{{route('Flights.edit', ['Flight' => $flight->id])}}" class="btn btn btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    <form action="{{route('Flights.destroy', ['Flight' => $flight->id])}}" method="post" class="float-left">
                                       @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn btn-sm" onclick="return confirm('Подтвердить удаление')">
                                            <i class="fas fa-trash-alt"></i>

                                        </button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>Рейсов нет...</p>
                    @endif

                </div>
                <div class="card-footer clearfix">
                    {{$flights->links()}}
                </div>
            </div>
                    </div>
                </div>
            </div>
        </section>
@endsection



