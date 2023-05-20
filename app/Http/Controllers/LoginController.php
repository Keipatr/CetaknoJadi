<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Session;
class LoginController extends Controller
{
    public function signinCustomer(Request $request)
    {
        $request ->validate([
            'USERNAME_CUST' => 'required',
            'PASSWORD_CUST' => 'required|min:8'
        ]);
        $user = Customer::where('USERNAME_CUST','=',$request->USERNAME_CUST)->first();
        if($user)
        {
            // if(Hash::check($request->PASSWORD_CUST,$user->PASSWORD_CUST))
            if ($request->PASSWORD_CUST == $user->PASSWORD_CUST)
            {
                // return back() -> with('success','aaaa');

                $request->session()->put('id_user',$user->ID_CUSTOMER);
                return redirect('/');
            }
            else
            {
                return back() -> with('fail','Username/Password is not regjnkistered/wrong');
            }
        }else{
            return back() -> with('fail','Username/Password is not registered/wrong');
        }
        // $credentials = $request->validate([
        //     'USERNAME_CUST' => 'required',
        //     'PASSWORD_CUST' => 'required|min:8',
        // ]);
    
        // if (Auth::attempt($credentials)) {
        //     echo "sukses";exit();

        //     // $request->session()->regenerate();  
        //     // return redirect()->intended('/');
        // } else {
        //     return back()->with('fail', 'Username/Password is not registered/wrong');
        // }
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
        if(session()->has('id_user')){
            session()->pull('id_user');
            return redirect('/');
        }
    }
}
