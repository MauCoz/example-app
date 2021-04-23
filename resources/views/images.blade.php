@extends('layouts.productLayout')

@section('product')
    @component('components.upload_form', ['ean' => $product->ean])
    @endcomponent

    <br />

    <div class="container">
        <div class="row">
            @foreach ($images as $image)

                <div class="col-sm-6" style="margin-bottom: 20px;">
                    <img src="{{ $image->image_url }}" class="img-fluid" height="200" />
                </div>
            @endforeach

        </div>
    </div>
@stop
