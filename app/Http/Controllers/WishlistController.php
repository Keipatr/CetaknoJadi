<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function fetch()
    {
        $userId = Auth::id();
        $user = Customer::with('wishlist')->find($userId);

        if ($user) {
            $wishlistQty = $user->wishlist->QTY_WISHLIST;

            return response()->json([
                'wishlistQty' => $wishlistQty,
            ]);
        } else {
            return response('User not found', 404);
        }
    }
}
