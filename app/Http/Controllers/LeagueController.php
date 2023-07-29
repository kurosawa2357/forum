<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Post;
use App\Models\Team;
use App\Models\League;

class LeagueController extends Controller
{
    public function index(League $league){
        return view('leagues/league')->with(['games' => $league->getByLeague()]);
    }
}
