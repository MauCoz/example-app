@extends('layouts.productLayout')

@section('product')
    <div>
        <div>Tags</div>
        @foreach ($tags as $tag)
            <div>{{ $tag->tag->name }}</div>
        @endforeach
        <form action="/action_page.php">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Productcode</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->productCode }}">
            </div>



            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Beschrijving</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->description }}">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Korte beschrijving</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->short_description }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Barcode</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $product->ean }}">
            </div>
            <h3>Prijzen</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kostprijs (VVP)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->base_price }}">
                <h3>Voorraad</h3>
                <label for="exampleFormControlInput1" class="form-label">Voorraad hier maken...</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $product->name }}">
                <h3>Afmetingen</h3>
                <label for="exampleFormControlInput1" class="form-label">Weight</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->weight }}">
                <label for="exampleFormControlInput1" class="form-label">Width</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ $product->width }}">
                <label for="exampleFormControlInput1" class="form-label">Height</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->height }}">
                <label for="exampleFormControlInput1" class="form-label">Length</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="{{ $product->length }}">
            </div>

    </div>

    </form>
    </div>

@stop
