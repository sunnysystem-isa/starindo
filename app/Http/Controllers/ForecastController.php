<?php

namespace App\Http\Controllers;

use AlterTable;
use App\Models\Forecast;
use DataType;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function index(Request $request) {
        // alter_table(Forecast::class, "nilai_forecast", DataType::LONGINT, 50, false, "nilai_ok_awal");
        $forecasts = Forecast::getAllForecast();
        return view("Forecast/forecast", compact([]));
    }
}
