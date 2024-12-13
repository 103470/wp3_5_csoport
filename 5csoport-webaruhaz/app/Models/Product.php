<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    public $incrementing = true;
    protected $keyType = 'int'; 
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'image',
        'created_at',
        'updated_at'
    ];
}
