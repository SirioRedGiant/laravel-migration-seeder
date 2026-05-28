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

        // MIGLIORAMENTO DEL TABELLONE

        // mese ed anno corrente
        $currentMonth = \Carbon\Carbon::now()->month;
        $currentYear = \Carbon\Carbon::now()->year;

        // Calcolo della media dei ritardi del mese (- i treni cancellati)
        $averageDelay = Train::whereMonth('departure_time', $currentMonth)
            ->whereYear('departure_time', $currentYear)
            ->where('is_cancelled', false)
            ->avg('delay_minutes');

        // il treno più puntuale del mese (escludendo i cancellati)
        $bestTrain = Train::whereMonth('departure_time', $currentMonth)
            ->whereYear('departure_time', $currentYear)
            ->where('is_cancelled', false)
            ->orderBy('delay_minutes', 'asc')
            ->first(); //il primo risultato

        return view('home', compact('trains', 'averageDelay', 'bestTrain'));
    }
}
