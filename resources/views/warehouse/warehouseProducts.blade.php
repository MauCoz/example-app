@extends('layouts.warehouseLayout')

@section('warehouse')
    <div>
        <div class="row">
            @foreach ($warehouseProducts as $product)
                <div class="col-sm-3">
                    {{ $product->product->ean }}
                </div>

            @endforeach
        </div>
    </div>
@stop
