<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class UpcomingTournamentController extends Controller
{
    public function index()
    {
        $upcommingTournaments = Tournament::all();
        return view('upcommingTournaments/index')
                ->with('upcommingTournaments', $upcommingTournaments);
    }
}
