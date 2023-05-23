<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VRegisController extends Controller
{
    public function vendregister(Request $request)
    {

      
        // Validate the form data
        $validatedData = $request->validate([
            'NAME_SHOP' => 'required',
            'EMAIL_SHOP' => 'required|email',
            'PASSWORD_SHOP' => 'required',
        ]);

        // Generate Shop ID
        $shopId = 'SHOP' . date('ymd') . mt_rand(1, 999);

        // Insert data into the database
        $insert = DB::table('SHOP')->insert([
            'ID_SHOP' => $shopId,
            'NAME_SHOP' => $validatedData['NAME_SHOP'],
            'EMAIL_SHOP' => $validatedData['EMAIL_SHOP'],
            'PASSWORD_SHOP' => $validatedData['PASSWORD_SHOP'],
            'TELP_SHOP' => $request['TELP_SHOP'],
            'ADDRESS_SHOP' => $request['ADDRESS_SHOP'],
            'POSTAL_SHOP' => $request['POSTAL_SHOP'],
            'CITY_SHOP' => $request['CITY_SHOP'],
            'TGL_DIBUAT' => now(),
            'STATUS_SHOP' => 'P',
            // 'P' for pending or other appropriate value
            'STATUS_DELETE' => 'O',
        ]);
        if ($insert) {

            return redirect()->back()->with('success', 'Registration successful!');
        }
        else{
            session()->flash('error', "Error Blok");
        }
        // Provide a response
    }

}