@extends('admin.layouts.layout')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Билеты</h1>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Список билетов</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('Tickets.create')}}" class="btn btn-outline-primary mb-3">Добавить билет</a>
                    @if (count($tickets))
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th style="width: 30px">#</th>
                                    <th>Рейс</th>
                                    <th>Имя пассажира</th>
                                    <th>Место</th>
                                    <th>Цена</th>
                                    <th>Редактировать</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->flights()->pluck('Destination')}}</td>
                                    <td>{{$ticket->passengers()->pluck('Name')}}</td>
                                    <td>{{$ticket->Seat}}</td>
                                    <td>{{$ticket->Price}}</td>
                                    <td><a href="{{route('Tickets.edit', ['Ticket' => $ticket->id])}}" class="btn btn btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    <form action="{{route('Tickets.destroy', ['Ticket' => $ticket->id])}}" method="post" class="float-left">
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
                        <p>Билетов нет...</p>
                    @endif
                </div>
                <div class="card-footer clearfix">
                    {{$tickets->links()}}
                </div>
            </div>
                    </div>
                </div>
            </div>
        </section>

@endsection



