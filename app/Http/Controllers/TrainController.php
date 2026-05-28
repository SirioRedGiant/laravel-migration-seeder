<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // il controller chiede al Model i treni in partenza da oggi in poi, li ordinerà in maniera ascendente cronologicamente
        $trains = Train::whereDate('departure_time', '>=', today())
            ->orderby('departure_time', 'asc')
            ->get();



        return view('home', compact('trains'));
    }
}
