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
        // $request ->validate([
        //     'USERNAME_CUST' => 'required',
        //     'PASSWORD_CUST' => 'required|min:8'
        // ]);
        // $user = Customer::where('USERNAME_CUST','=',$request->USERNAME_CUST)->first();
        // if($user)
        // {
        //     // if(Hash::check($request->PASSWORD_CUST,$user->PASSWORD_CUST))
        //     if ($request->PASSWORD_CUST == $user->PASSWORD_CUST)
        //     {
        //         // return back() -> with('success','aaaa');

        //         $request->session()->put('id_user',$user->ID_CUSTOMER);
        //         return redirect('/');
        //     }
        //     else
        //     {
        //         return back() -> with('fail','Username/Password is not regjnkistered/wrong');
        //     }
        // }else{
        //     return back() -> with('fail','Username/Password is not registered/wrong');
        // }
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

        $request->validate([
            'USERNAME_CUST' => 'required',
            'PASSWORD_CUST' => 'required|min:8'
        ]);

        $user = Customer::where('USERNAME_CUST', '=', $request->USERNAME_CUST)->first();
        // dd($user);
        if ($user) {
            if ($request->PASSWORD_CUST == $user->PASSWORD_CUST) {
                if ($request->has('remember_me')) {
                    Auth::login($user, true); // Set the "remember me" cookie for one week
                    $rememberToken = Auth::getRecallerName();
                    $expiration = now()->addWeeks(1)->getTimestamp(); // Get the timestamp value of the expiration time
                    $cookie = cookie($rememberToken, $user->getRememberToken(), $expiration);
                    return redirect('/')->withCookie($cookie);
                } else {
                    Auth::login($user); // Log in without "remember me"
                    $request->session()->regenerate(); // Regenerate the session ID to prevent session fixation
                }

                return redirect('/');
            }
        }

        return back()->with('fail', 'Username/Password is not registered/wrong');

    }
    public function signup(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customer',
            'password' => 'required|min:8'
        ]);
        $user = new Customer();
        $user->name = $request-> name;
        $user->email = $request-> email;
        $user->password = Hash::make($request-> password);
        $res = $user->save();
        if($res){
            return back()->with('success','Signup Successfully');
        }else{
            return back() -> with('fail','Something wrong');
        }
    }

    public function logout(){
        // if(session()->has('id_user')){
        //     session()->pull('id_user');
        //     return redirect('/');
        // }


        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();

        return redirect('/');
    }
}
