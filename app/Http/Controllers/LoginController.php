<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function signinCustomer(Request $request)
    {
        if (session()->has('ID_CUSTOMER') || Cookie::get('ID_CUSTOMER') != null) {
            return redirect()->route('my-account');
        }
        $remember = ($request->has('remember')) ? true : false;
        $request->validate([
            'username_cust' => 'required',
            'password' => 'required|min:8'
        ]);
        $user = Customer::where('USERNAME_CUST', '=', $request->username_cust)->first();
        if ($user)
        {

            if (Hash::check($request->password, $user->PASSWORD_CUST))
            {
                if ($user->STATUS_DELETE == 0) {
                    if ($remember == true) {
                        Cookie::queue('USERNAME_CUST', $user->USERNAME_CUST, 60 * 24 * 7);
                        Cookie::queue('PASSWORD_CUST', $user->PASSWORD_CUST, 60 * 24 * 7);
                        Cookie::queue('ID_CUSTOMER', $user->ID_CUSTOMER, 60 * 24 * 7);
                        return redirect()->route('home');

                    }
                    else
                    {
                        $request->session()->put('USERNAME_CUST', $user->USERNAME_CUST);
                        $request->session()->put('PASSWORD_CUST', $user->PASSWORD_CUST);
                        $request->session()->put('ID_CUSTOMER', $user->ID_CUSTOMER);
                        return redirect()->route('home');
                    }
                }
                else
                {
                    return back()->with('fail', 'Username/Password is deleted');
                }
            }
            else
            {
                return back()->with('fail', 'Username/Password is incorrect');
            }
        }
        else
        {
            return back()->with('fail', 'Username/Password is not registered');
        }
    }
    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'FIRST_NAME' => 'required',
            'LAST_NAME' => 'required',
            'EMAIL_CUST' => 'required|email|unique:customer',
            'PASSWORD_CUST' => 'required|min:8',
            'TELP_CUST' => 'required',
            'ADDRESS_CUST' => 'required',
            'ID_CITY' => 'required',
            'CITY_CUST' => 'required',
            'POSTAL_CUST' => 'required',
            'USERNAME_CUST' => 'required|unique:customer',
        ]);

        $insert = DB::table('customer')->insert([
            'ID_CUSTOMER' => 'AUTO',
            'ID_WISHLIST' => 'AUTO',
            'ID_CART' => 'AUTO',
            'NAME_CUST' => $validatedData['FIRST_NAME'] . ' ' . $validatedData['LAST_NAME'],
            'TELP_CUST' => $validatedData['TELP_CUST'],
            'ADDRESS_CUST' => $validatedData['ADDRESS_CUST'],
            'ID_CITY' => $validatedData['ID_CITY'],
            'CITY_CUST' => $validatedData['CITY_CUST'],
            'POSTAL_CUST' => $validatedData['POSTAL_CUST'],
            'USERNAME_CUST' => $validatedData['USERNAME_CUST'],
            'PASSWORD_CUST' => Hash::make($validatedData['PASSWORD_CUST']),
            'EMAIL_CUST' => $validatedData['EMAIL_CUST'],
            'STATUS_DELETE' => 0,
        ]);

        if ($insert) {
            return redirect()->back()->with('success', 'Registration successful!');
        } else {
            return redirect()->back()->with('error', 'Error occurred during registration.');
        }
    }

    public function logout(Request $request)
    {
        if (session()->has('ID_CUSTOMER') || Cookie::get('ID_CUSTOMER') != null) {
            session()->pull('ID_CUSTOMER');
            session()->pull('USERNAME_CUST');
            session()->pull('PASSWORD_CUST');

            Cookie::queue(Cookie::forget('ID_CUSTOMER'));
            Cookie::queue(Cookie::forget('USERNAME_CUST'));
            Cookie::queue(Cookie::forget('PASSWORD_CUST'));
            return redirect()->route('loginpage');
        }
        return redirect()->route('home');
    }
}
