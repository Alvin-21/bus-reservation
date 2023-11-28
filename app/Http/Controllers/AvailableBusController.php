<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AvailableBusController extends Controller
{
    /**
     * Display the bus results view.
     */
    public function display(Request $request): View
    {

        $buses = DB::table('available_buses')->where([
            ['source', '=', $request->source],
            ['destination', '=', $request->destination],
        ])->get();


        return view('bus-result',[
            'routes' => $buses
        ]);
    }
}
