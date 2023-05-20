<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

// class Customer extends Model
class Customer extends Model implements Authenticatable

{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = ['id_customer', 'id_wishlist', 'id_cart', 'name_cust', 'telp_cust','address_cust','city_cust','postal_cust','username_cust','password_cust','email_cust'];
    protected $rememberTokenName = 'remember_token';

    public function getAuthIdentifierName()
    {
        return 'ID_CUSTOMER'; // Replace with the actual identifier column name
    }

    public function getAuthIdentifier()
    {
        return $this->ID_CUSTOMER; // Replace with the actual identifier column name
    }

    public function getAuthPassword()
    {
        return $this->PASSWORD_CUST; // Replace with the actual password column name
    }

    public function getRememberToken()
    {
        // If your "customer" table has a "remember_token" column, return its value here
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        // If your "customer" table has a "remember_token" column, set its value here
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        // If your "customer" table has a different column name for the remember token,
        // return that column name here
        return 'remember_token';
    }
}
