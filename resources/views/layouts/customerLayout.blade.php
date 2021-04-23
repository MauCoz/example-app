@extends('layouts.master')

@section('product', 'product page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <br />
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{ $product->ean }}</h1>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <button type="button" class="btn btn-light btn-sm">print labels</button>
                <button type="button" class="btn btn-light btn-sm">wijzig Voorraad</button>
                <a class="btn btn-primary btn-sm" href="/product/1/edit">bewerk product</a>
            </div>
        </div>

        <br />

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="https://productmanagementfestival.com/wp-content/uploads/2017/01/sell-your-product-online.jpg"
                        class="img-fluid" alt="product-image">
                </div>
                <div class="col-sm-9">
                    <h2>{{ $product->id }}</h2>
                </div>
            </div>

            <br />



            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/product/1">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product/1/history">Voorraadgeschiedenis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/product/1/images">Afbeeldingen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>

            <br />

            <div class="card card-body">
                @yield("product")
            </div>
        </div>




    </div>
@stop
