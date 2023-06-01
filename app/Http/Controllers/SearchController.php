<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $baseURL = env('BASE_URL');
        ; // Get the base URL from the .env file
        $authKey = env('AUTH_KEY');
        ; // Get the auth key from the .env file

        $search = $request->input('search'); // Get the search query from the request
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
    public function searchProducts(Request $request)
    {
        $searchQuery = $request->input('search');

        // Perform the product search query
        $products = DB::table('product')
            ->join('container', 'product.ID_CONTAINER', '=', 'container.ID_CONTAINER')
            ->join('category', 'container.ID_CATEGORY', '=', 'category.ID_CATEGORY')
            ->where('PRODUCT_NAME', 'like', '%' . $searchQuery . '%')
            ->select('PRODUCT_NAME')
            ->get();

        // Perform the store search query
        $stores = DB::table('shop')
            ->where('NAME_SHOP', 'like', '%' . $searchQuery . '%')
            ->select('NAME_SHOP')
            ->get();

        // Prepare the search results array
        $results = [];

        // Add product results to the array
        foreach ($products as $product) {
            $results[] = [
                'name' => $product->PRODUCT_NAME,
                'url' => '/products/' . $product->PRODUCT_NAME,
                // Replace with the actual product URL
                'image' => '/images/products/' . $product->PRODUCT_NAME . '.jpg',
                // Replace with the actual product image URL
                'price' => 'Rp ' . number_format(mt_rand(10000, 1000000), 0, ',', '.') // Replace with the actual product price
            ];
        }

        // Add store results to the array
        foreach ($stores as $store) {
            $results[] = [
                'name' => $store->NAME_SHOP,
                'url' => '/stores/' . $store->NAME_SHOP // Replace with the actual store URL
            ];
        }

        // Return the search results as JSON
        return response()->json($results);
    }
}
