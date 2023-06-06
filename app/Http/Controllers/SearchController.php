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
                $cities[] = ['name' => $area['name']];
            }

            return response()->json($cities);
        } else {
            return response()->json(['error' => 'Failed to fetch areas'], $response->status());
        }

    }

    public function searchProducts(Request $request)
{
    $searchQuery = $request->get('searchProduct');

    // Perform the product search query
    $products = DB::table('product')
        ->join('container', 'product.ID_CONTAINER', '=', 'container.ID_CONTAINER')
        ->join('category', 'category.ID_CATEGORY', '=', 'container.ID_CATEGORY')
        ->where('product.PRODUCT_NAME', 'LIKE', "%$searchQuery%")
        ->select('product.PRODUCT_NAME', 'container.ID_CONTAINER')
        ->get();

    // Prepare the search results array
    $results = [];

    // Add product results to the array
    foreach ($products as $product) {
        $results[] = [
            'name' => $product->PRODUCT_NAME,
            'url' => '/products/' . $product->ID_CONTAINER, // Replace with the actual product URL or ID
        ];
    }

    // Return the search results as JSON
    return response()->json($results);
}

}
