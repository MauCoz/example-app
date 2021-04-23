<div class="container-fluid">

    <div>
        {{-- enctype attribute is important if your form contains file upload --}}
        {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
        <form method="post" action="{{ route('image.store', $ean) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="image-url" placeholder="Enter Image Url"
                    name="image_url">
            </div>

            <button type="submit" class="btn btn-primary">add to product</button>
        </form>
    </div>
</div>
