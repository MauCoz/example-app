<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Tag extends Model
{

    use HasFactory;
    use FilterQueryString;

    protected $table = "tag";
    protected $filters = ["sort"];
}
