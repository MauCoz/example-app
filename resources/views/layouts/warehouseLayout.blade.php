@extends('layouts.master')

@section('warehouse', 'warehouse page')

@section('content')
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{ $warehouse->ean }}</h1>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <a class="btn btn-primary btn-sm" href="/warehouse/1/edit">bewerk warehouse</a>
            </div>
        </div>

        <br />

        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-9">
                    <h2>{{ $warehouse->id }}</h2>
                </div>
            </div>

            <br />

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/warehouse/1">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/warehouse/1/products">Products</a>

            </ul>

            <br />

            <div class="card card-body">
                @yield("warehouse")
            </div>
        </div>




    </div>
@stop
