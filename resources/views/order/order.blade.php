@extends('layouts.orderLayout')

@section('order')
    <div class="container">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="mb-3 row text-end">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Bestelling</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $order->order_id }}">
                        </div>
                    </div>

                    <div class="mb-3 row text-end">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Besteldatum</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $order->creation_date }}">
                        </div>
                    </div>


                    <div class="mb-3 row text-end">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Details</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $order->order_details }}">
                        </div>
                    </div>

                    <div class="mb-3 row text-end">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Land</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $order->country }}">
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-5 col-form-label">Factureren aan</label>
                        <div class="col-sm-7">
                            <input placeholder="{{ $order->customer->first_name }}">
                            <input placeholder="{{ $order->customer->last_name }}">
                            <input placeholder="{{ $order->customer->address }}">
                            <input placeholder="{{ $order->customer->postal_code }}">
                            <input placeholder="{{ $order->customer->residence }}">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Productcode</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Totaal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $order->product->ean }}</th>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->amount_ordered }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->product->base_price }}</td>
                        <td>{{ $order->product->base_price * $order->amount_ordered }}</td>
                    </tr>
                    <tr>
                        <th scope="row">producten: {{ $order->amount_ordered }}</th>
                        <td></td>
                        <td></td>
                        <td>{{ $order->status }}</td>
                        <td>Totaal</td>
                        <td>{{ $order->product->base_price * $order->amount_ordered }}</td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>BTW hoog</td>
                        <td>1,68</td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Totaal</td>
                        <td>{{ $order->product->base_price * $order->amount_ordered }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

@stop
