<?php

namespace Creode\LaraveNovaMeetTheTeam\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Creode\LaravelNovaMeetTheTeam\Entities\Team;

class MeetTheTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $teams = Team::with('members')->get();
        return view('nova-meet-the-team::index', compact('teams'));
    }
}
