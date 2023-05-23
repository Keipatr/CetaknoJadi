<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRegisController extends Controller
{
    public function custregister(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'NAME_CUST' => 'required',
            'USERNAME_CUST' => 'required',
            'EMAIL_CUST' => 'required|email',
            'PASSWORD_CUST' => 'required',
        ]);

        // Generate IDs for wishlist and cart
        $customerid = 'CUST' . date('ymd') . mt_rand(1, 999);
        $wishlistId = 'WISH' . date('ymd') . mt_rand(1, 999);
        $cartId = 'CART' . date('ymd') . mt_rand(1, 999);


        // Insert data into the database
        $insert = DB::table('CUSTOMER')->insert([
            'ID_CUSTOMER' => $customerid,
            'ID_WISHLIST' => $wishlistId,
            'ID_CART' => $cartId,
            'NAME_CUST' => $validatedData['NAME_CUST'],
            'TEL_CUST' => $request['TEL_CUST'],
            'ADDRESS_CUST' => $request['ADDRESS_CUST'],
            'CITY_CUST' => $request['CITY_CUST'],
            'POSTAL_CUST' => $request ['POSTAL_CUST'],
            'USERNAME_CUST' => $validatedData['USERNAME_CUST'],
            'PASSWORD_CUST' => $validatedData['PASSWORD_CUST'],
            'EMAIL_CUST' => $validatedData['EMAIL_CUST'],
            'STATUS_DELETE' => 'O',
        ]);

        // Provide a response
        if ($insert) {

            return redirect()->back()->with('success', 'Registration successful!');
        }
        else{
            session()->flash('error', "Error Blok");
        }
    }
}
