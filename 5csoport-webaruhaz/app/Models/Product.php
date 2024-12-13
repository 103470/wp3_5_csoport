<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'image',
        'created_at',
        'updated_at'
    ];
}
