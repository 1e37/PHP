<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

// Datetime Manipulator
use Carbon\Carbon;

use Illuminate\Http\Request;

class ApodController extends Controller
{

    public function index()
    {
        return view('apod.index');
    }


    public function getResponse(Request $request): JsonResponse
    {
        // Retrieve the API key from the environment variables
        $apiKey = 'xxxxxxxxxxxxxx';
        $endDate = now();

        $startDate = $request->query('start_date');

     // Create a Carbon instance from the start date
    $startDateCarbon = Carbon::parse($startDate);
    // Add 30 days to the start date to get the end date
    $endDate = $startDateCarbon->addDays(60)->toDateString();

        // Make the API request
        try {
            $response = Http::get('https://api.nasa.gov/planetary/apod', [
                'api_key' => $apiKey,
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);

            // Check if the response is successful
            if ($response->successful()) {
                return response()->json($response->json());
            }

            // Handle specific response errors
            return response()->json([
                'error' => 'Error retrieving APOD data',
                'status' => $response->status(),
                'message' => $response->body()
            ], $response->status());
        } catch (\Exception $ex) {
            return response()->json([
                'error' => 'An error occurred while fetching data',
                'message' => $ex->getMessage()
            ], 500);
        }
    }
}
