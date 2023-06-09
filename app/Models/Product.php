<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'id_container',
        'id_product',
        'product_name',
        'jenis',
        'image',
        'desc_product',
        'price_product',
        'qty_product',
        'tambahan',
        'available_product',
        'status_delete',
    ];

}
