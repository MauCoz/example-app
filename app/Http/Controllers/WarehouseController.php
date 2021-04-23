<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\WarehouseProduct;

class WarehouseController extends Controller
{
    private function getWarehouseById($id)
    {
        $warehouses = Warehouse::query()->where('id', $id)->first();

        // if product not found (empty) throw 404 error.
        // TODO: custom 404 page in views
        if (empty($warehouses)) {abort(404, "This warehouse could not be found.");}

        return $warehouses;
    }

    public function show()
    {
        $warehouses = Warehouse::filter()->get();

        return view('warehouse.warehouses', [
            'warehouses' => $warehouses,
        ]);
    }

    public function one($id)
    {
        return view('warehouse.warehouse', [
            'warehouse' => $this->getWarehouseById($id),
        ]);
    }

    public function products($id)
    {
        $warehouseProducts = WarehouseProduct::where('warehouse_id', $id)->get();

        foreach ($warehouseProducts as $warehouseProduct) {
            $product = Product::query()->where('ean', $warehouseProduct->ean)->first();

            $warehouseProduct->product = $product;
        };

        return view('product.warehouses', [
            'warehouse' => $this->getWarehouseById($id),
            'warehouseProducts' => $warehouseProducts,
        ]);
    }
}
