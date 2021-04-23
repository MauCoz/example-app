<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Product extends Model
{

    use HasFactory;
    use FilterQueryString;

    protected $table = "product";
    protected $filters = ["sort"];

    public function image()
    {
        return $this->hasOne(ProductImage::class, "ean", "ean");
    }
}
