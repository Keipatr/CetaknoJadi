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
                        // dd(Cookie::get('ID_CUSTOMER'));
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


        // $request->validate([
        //     'USERNAME_CUST' => 'required',
        //     'PASSWORD_CUST' => 'required|min:8'
        // ]);

        // $user = Customer::where('USERNAME_CUST', '=', $request->USERNAME_CUST)->first();

        // if ($user) {
        //     if ($request->PASSWORD_CUST == $user->PASSWORD_CUST) {
        //         if ($request->has('REMEMBER_ME')) {
        //             Auth::login($user, true); // Set the "remember me" cookie for one week
        //         } else {
        //             Auth::login($user); // Log in without "remember me"
        //             $request->session()->regenerate(); // Regenerate the session ID to prevent session fixation
        //         }

        //         return redirect('/');
        //     } else {
        //         return back()->with('fail', 'Username/Password is not registered/wrong');
        //     }
        // } else {
        //     return back()->with('fail', 'Username/Password is not registered/wrong');
        // }

        //
        // dd($request->all());
        // $remember = ($request->has('remember')) ? true : false;
        // $credentials = $request->validate([
        //     'username_cust' => ['required'],
        //     'password' => ['required'],
        // ]);
        // // $userData = DB::select("SELECT * FROM customer WHERE USERNAME_CUST = :username_cust", ['username_cust' => $credentials['username_cust']]);
        // $user = Customer::where('USERNAME_CUST', '=', $credentials['username_cust'])->first();
        // // if (!empty($userData)) {
        // //dd($request->all());
        // // $user = new Customer();
        // // $user->fill((array) $userData[0]);

        // // dd($user[0]);
        // //   dd(Hash::make($user->PASSWORD_CUST));
        // // dd($credentials, Auth::attempt($credentials));

        // if (Auth::attempt($credentials, $remember)) {
        //     if ($remember == true) {
        //         // Cookie::queue('username', $credentials['username'], 60);
        //         // Cookie::queue('password', $credentials['password'], 60);
        //         // dd($userData, $remember);
        //         Auth::login($user, $remember);
        //         return redirect()->route('home');
        //     } else {
        //         // dd($userData);
        //         Auth::login($user);
        //         $request->session()->regenerate();
        //         return redirect()->back();
        //     }
        // } else {
        //     return view('shop-wishlist');
        // }



    }
    public function signup(Request $request)
    {
        // $request ->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:customer',
        //     'password' => 'required|min:8'
        // ]);
        // $user = new Customer();
        // $user->name = $request-> name;
        // $user->email = $request-> email;
        // $user->password = Hash::make($request-> password);
        // $res = $user->save();
        // if($res){
        //     return back()->with('success','Signup Successfully');
        // }else{
        //     return back() -> with('fail','Something wrong');
        // }
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




        // $user = Auth::user();
        // if ($user && $user->getRememberToken()) {
        //     $user->setRememberToken(null);
        //     $rememberTokenCookie = Auth::guard('web')->getRecallerName();
        //     Cookie::queue(Cookie::forget($rememberTokenCookie));
        // }
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect('/');
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

    }
}
