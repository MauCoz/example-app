@extends('layouts.productLayout')

@section('product')
    <div>
        <div class="row">
            @foreach ($warehouseProducts as $product)
                <div class="col-sm-6 card">
                    test
                    {{ $product->warehouse->name }}
                </div>

            @endforeach
        </div>
    </div>
@stop
