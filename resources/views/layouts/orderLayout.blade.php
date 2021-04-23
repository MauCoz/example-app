@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-muted">Bestelling</h5>
                    <br />
                    <h3>{{ $order->order_id }} <span class="badge bg-primary">{{ $order->warehouse->name }}</span></h3>
                    <br />


                </div>
                <div class="col-sm-6" style="text-align: right;">
                    <a class="btn btn-light">Meer</a>

                    <a class="btn btn-light">Notititie toevoegen</a>

                    <a class="btn btn-light">Bewerk</a>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backorders">Backorders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/log">Log</a>
                </li>
            </ul>
        </div>
    </div>
    @yield("order")
@stop
