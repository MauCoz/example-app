@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <div class="container">
        <h1 class="page-title">Producten</h1>

        <div class="row">
            <div class="col-sm-4">
                Hier komen filters
            </div>
            <div class="col-sm-12">

                <div class="alert alert-secondary" role="alert">

                </div>
                <div class="card">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">EAN</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Prijs</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->ean }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->base_price }}</td>

                                    <td>
                                        <a href="{{ route('product.one', ['ean' => $product->ean]) }}"><button
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
