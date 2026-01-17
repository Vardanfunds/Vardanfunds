<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Response;

class ClearController extends Controller
{
    public function clear()
    {
        // Clears config, route, view, and application cache
        Artisan::call('optimize:clear');
        Artisan::call('optimize');
        Artisan::call('cache:clear');

        return response()->json([
            'status' => 'success',
            'message' => 'Laravel cache cleared successfully'
        ], Response::HTTP_OK);
    }
}
