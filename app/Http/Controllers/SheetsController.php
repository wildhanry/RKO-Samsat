<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SheetsController extends Controller
{
    public function index()
    {
        $url = 'https://script.google.com/macros/s/AKfycbyTo3OhIj_PLk22AxvLJcXYwrDv6TSFFIzhXWMseQmIQcu6CS0YeCkse7aeGPYrDx8Q/exec';

        $response = Http::get($url);

        $data = json_decode($response->body(), true);

        Log::info('API Response', ['body' => $response->body()]);

        if ($response->failed()) {
            Log::error('Failed to fetch data from API', ['response' => $response->body()]);
            return response()->json(['message' => 'Failed to fetch data.'], 500);
        }

        $data = $response->json();
        // dd($data);
        // dd([
        //     'status' => $response->status(),
        //     'body' => $response->body(),
        //     'json' => $response->json()
        // ]);

        Log::info('Data fetched from API', ['data' => $data]);

        return view('sheets.index', ['data' => $data]);
    }
}
