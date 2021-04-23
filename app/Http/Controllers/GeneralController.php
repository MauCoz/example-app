<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function store(Request $request)
    {
        // get ean from post route
        $ean = $request->ean;

        // todo: better validation on image_url
        $validated = $request->validate([
            'image_url' => 'string|max:400',
        ]);

        // create product image in database
        $file = ProductImage::create([
            'ean' => $ean,
            'image_url' => $validated['image_url'],
        ]);

        // feedback
        Session::flash('success', "Success!");

        return Redirect::back();
    }

    public function viewUploads()
    {
        $images = ProductImage::all();
        return view('view_uploads')->with('images', $images);
    }
}
