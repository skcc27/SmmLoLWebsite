<?php

namespace App\Http\Controllers;


use App\Contestant;
use App\Team;
use Illuminate\Http\Request;

/**
 * Class DevController
 * Mainly uses for development or internal testing purpose
 * @package App\Http\Controllers
 */
class DevController extends Controller
{
    /**
     * DevController constructor.
     */
    public function __construct()
    {
        $this->middleware('dev');
    }


    /**
     * Show all team
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teamList(Request $request)
    {
        $teams = Team::all();
        return view('dev.teamlist', [
            'teamCount' => count($teams),
            'token' => $request->input('token'),
            'teams' => $teams
        ]);
    }

    /**
     * Display team info
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function team(Request $request, $id)
    {
        $team = Team::where('id', $id)->first();
        $contestants = Contestant::where('team_id', $id)->get();
        if (count($team) > 0 && count($contestants) > 0) {
            return view('dev.team', [
                'team' => $team,
                'contestants' => $contestants
            ]);
        } else {
            return redirect('/');
        }
    }
}