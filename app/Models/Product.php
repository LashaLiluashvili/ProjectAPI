<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["name", "price", "term"];

    // connection to Attribute Model. 
    public function attributeDetails()
    {
        return $this->hasMany(Attribute::class);
    }
}
