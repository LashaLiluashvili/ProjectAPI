<?php

namespace App\Models;

namespace App\Traits;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dproduct extends Model
{
    use HasFactory;
    protected $fillable = ["d_product_id", "d_product_key", "d_product_value"];
}
