<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $baseURL = env('BASE_URL');
        $authKey = env('AUTH_KEY');

        $search = $request->get('searchLocation');
        $response = Http::withHeaders([
            'Authorization' => $authKey,
        ])->get($baseURL . '/api/v1/public/basic/suggestion', [
                'search' => $search,
            ]);

        if ($response->ok()) {
            $areas = $response->json();
            return response()->json($areas);
        } else {
            return response()->json(['error' => 'Failed to fetch areas'], $response->status());
        }
    }
    public function searchCities(Request $request)
    {
        $baseURL = env('BASE_URL');
        $authKey = env('AUTH_KEY');

        $search = $request->get('searchLocation');
        $response = Http::withHeaders([
            'Authorization' => $authKey,
        ])->get($baseURL . '/api/v1/public/basic/suggestion', [
                'search' => $search,
            ]);
        if ($response->ok()) {
            $areas = $response->json();

            $cities = [];
            foreach ($areas as $area) {
                $cities[] = [
                    'name' => $area['name'],
                    'id' => $area['id']
                ];
            }

            return response()->json($cities);
        } else {
            return response()->json(['error' => 'Failed to fetch areas'], $response->status());
        }

    }
    public function getPrice(Request $request)
    {
        $baseURL = env('BASE_URL');
        $authKey = env('AUTH_KEY');

        if (Session::has('USERNAME_CUST')) {
            $username = Session::get('USERNAME_CUST');
        } else {
            $username = Cookie::get('USERNAME_CUST');
        }
        $cityID = DB::select("select ID_CITY from customer where USERNAME_CUST = '$username'");

        $response = Http::withHeaders([
            'Authorization' => $authKey,
        ])->get($baseURL . '/api/v1/public/basic/rate?id='.$cityID[0]->ID_CITY);

        if ($response->ok()) {
            $data = $response->json();
            return response()->json(['data' => $data]);
        }
        else
        {
            return response()->json(['error' => 'Failed to fetch areas'], $response->status());
        }

    }

    public function searchProducts(Request $request)
{
    $searchQuery = $request->get('searchProduct');

    // Perform the product search query
    $products = DB::table('container as co')
        ->select('p.PRODUCT_NAME', 'co.ID_CONTAINER', 's.NAME_SHOP', 'p.ID_PRODUCT')
        ->join('category as ca', 'co.ID_CATEGORY', '=', 'ca.ID_CATEGORY')
        ->join('product as p', 'co.ID_CONTAINER', '=', 'p.ID_CONTAINER')
        ->join('shop as s', 'co.ID_SHOP', '=', 's.ID_SHOP')
        ->where('p.STATUS', 'Y')
        ->where('p.STATUS_DELETE', 0)
        ->where('co.STATUS', 1)
        ->where('p.PRODUCT_NAME', 'LIKE', "%$searchQuery%")
        ->get();

    // Prepare the search results array
    $results = [];

    // Add product results to the array
    foreach ($products as $product) {
        $results[] = [
            'name' => $product->PRODUCT_NAME,
            'url' => '/products/' . $product->NAME_SHOP . '/' . $product->PRODUCT_NAME . '/' . $product->ID_PRODUCT . '?id=' . Crypt::encryptString($product->ID_CONTAINER),
        ];
    }

    // Return the search results as JSON
    return response()->json($results);
}

}
