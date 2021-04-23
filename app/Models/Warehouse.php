<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Warehouse extends Model
{
    protected $table = "warehouse";
    protected $filters = ["sort", "like", "between", "accepting_orders", "priority"];

    use HasFactory;
    use FilterQueryString;
}
