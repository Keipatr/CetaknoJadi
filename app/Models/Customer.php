<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = ['id_customer', 'id_wishlist', 'id_cart', 'name_cust', 'telp_cust','address_cust','city_cust','postal_cust','username_cust','password_cust','email_cust'];
}
