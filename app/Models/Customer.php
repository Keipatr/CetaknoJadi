<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

// class Customer extends Model
class Customer extends Model implements Authenticatable

{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'ID_CUSTOMER';
    protected $fillable = ['ID_CUSTOMER', 'ID_WISHLIST', 'ID_CART', 'NAME_CUST', 'TELP_CUST','ADDRESS_CUST','CITY_CUST','POSTAL_CUST','USERNAME_CUST','PASSWORD_CUST','EMAIL_CUST','STATUS_DELETE'];
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
