<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('book-bus', [
            'routes' => Route::all()
        ]);
    }

    public function displayRoutes()
    {
        return view('routes', [
            'routes' => Route::all()
        ]);
    }
}
