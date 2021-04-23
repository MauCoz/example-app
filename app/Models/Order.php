<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Order extends Model
{

    use HasFactory;
    use FilterQueryString;

    protected $table = "bolorders";
    protected $filters = ["sort"];

    public function product()
    {
        return $this->hasOne(Product::class, "ean", "product_ean");
    }

    public function warehouse()
    {
        return $this->hasOne(Warehouse::class, "id", "warehouse_id");
    }
}
