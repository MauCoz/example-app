<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;
use App\Models\Warehouse;
use App\Models\WarehouseProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * get product by ean code.
     */
    private function getProductByEan($ean)
    {
        $product = Product::query()->where('ean', $ean)->first();

        // if product not found (empty) throw 404 error.
        // TODO: custom 404 page in views
        if (empty($product)) {abort(404, "This product could not be found.");}

        return $product;
    }

    /**
     * get tags belonging to the product by product ean.
     */
    private function getTags($ean)
    {
        $productTags = ProductTag::where('ean', $ean)->get();

        foreach ($productTags as $productTag) {
            $tag = Tag::query()->where('id', $productTag->tag_id)->first();

            $productTag->tag = $tag;
        };

        return $productTags;
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $products = Product::all();

        return view('product.products', [
            'products' => $products,
        ]);
    }

    public function one($ean)
    {
        $product = $this->getProductByEan($ean);
        $tags = $this->getTags($ean);

        return view('product.product', [
            'product' => $product,
            'tags' => $tags,
        ]);

    }

    public function edit($ean)
    {
        $product = $this->getProductByEan($ean);

        return view('product.editProduct', [
            'product' => $product,
        ]);
    }

    public function stockHistory($ean)
    {
        $product = $this->getProductByEan($ean);

        // TODO: get product history from a different table in database.

        $productHistory = $product;

        return view('product.stockHistory', [
            'product' => $product,
            'stockHistory' => $productHistory,
        ]);
    }

    public function images($ean)
    {
        $product = $this->getProductByEan($ean);

        $img = ProductImage::query()->where('ean', $ean)->get();

        return view('images', [
            'product' => $product,
            'images' => $img,
        ]);
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $products = Product::query()
            ->where('barcode', 'like', "%{$key}%")
            ->orWhere('name', 'like', "%{$key}%")
            ->get();

        return view('product.products', [
            'products' => $products,
        ]);
    }
    public function warehouses($ean)
    {
        $warehouseProducts = WarehouseProduct::where('ean', $ean)->get();

        foreach ($warehouseProducts as $warehouseProduct) {
            $warehouse = Warehouse::query()->where('id', $warehouseProduct->warehouse_id)->first();

            $warehouseProduct->warehouse = $warehouse;
        };

        return view('product.warehouses', [
            'product' => $this->getProductByEan($ean),
            'warehouseProducts' => $warehouseProducts,
        ]);
    }

    public function addTagToProduct($ean, $tagId)
    {
        $productTag = new ProductTag();

        $productTag->ean = $ean;
        $productTag->tag_id = $tagId;

        $productTag->save();
    }
}
