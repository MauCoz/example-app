@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <h1 class="page-title">Bestellingen</h1>

        <div class="row">

            <div class="col-sm-12">

                <div class="alert alert-secondary" role="alert">

                </div>
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Bestelling</th>
                                <th scope="col">Status</th>
                                <th scope="col">Besteld op</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{ $order->order_id }}</th>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->creation_date }}</td>
                                    <td>{{ $order->warehouse->id }}</td>

                                    <td>
                                        <a href="{{ route('order.one', ['order_id' => $order->order_id]) }}"><button
                                                class="btn btn-primary">open</button></a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
@stop
