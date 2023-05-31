<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $baseURL = env('BASE_URL');; // Get the base URL from the .env file
        $authKey = env('AUTH_KEY');; // Get the auth key from the .env file

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
    
}
