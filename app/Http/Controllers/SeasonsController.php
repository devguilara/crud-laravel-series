<?php

namespace App\Http\Controllers;
use App\Models\Serie;

class SeasonsController extends Controller
{
    public function index(Serie $series)
    {
        $seasons = $series->seasons()->with('episodes')->get();

        return view('seasons.index')->with('seasons', $seasons)->with('series', $series);
    }
}
