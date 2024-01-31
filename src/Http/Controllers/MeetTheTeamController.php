<?php

namespace Creode\LaravelNovaMeetTheTeam\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Creode\LaravelNovaMeetTheTeam\Repositories\TeamRepository;

class MeetTheTeamController extends Controller
{
    public function __construct(protected TeamRepository $teamRepository)
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $teams = $this->teamRepository->with('members')->get();
        return view('nova-meet-the-team::index', compact('teams'));
    }
}
