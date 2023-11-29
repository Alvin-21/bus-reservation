<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function display()
    {
        return view('buses', [
            'buses' => Bus::all()
        ]);
    }
}
