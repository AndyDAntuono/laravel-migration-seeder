<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString(); // data odierna
        $trains = Train::whereDate('orario_partenza', $today)->get(); // filtra i treni in partenzza secondo today
        return view('home', compact('trains')); // restituisce la vista con i dati
    }
}
