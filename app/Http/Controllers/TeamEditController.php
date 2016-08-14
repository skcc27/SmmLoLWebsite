<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use app\RandomToken;
use App\Team;
use App\TeamToken;

class TeamEditController extends Controller
{
    public function generateToken(Request $request)
    {
        $email = $request->input('email');
        try {
            $team = Team::where('email', $email)->firstOrFail();
            $tokenString = (new RandomToken())->string();
            $token = new TeamToken();
            $token->team_id = $team->id;
            $token->token = $tokenString;
            $token->save();
            $this->sendEmail($team, $tokenString);
            return response();
        } catch (\Exception $e) {
            return 'Exception : ' . $e->getMessage();
        }
    }

    private function sendEmail(Team $team, $tokenString)
    {
        Mail::send('lol.email', ['team' => $team, 'token' => $tokenString], function ($m) use ($team) {
            $m->from('noreply@smmlol.tk', 'Samarnmitr League of legends Competition');

            $m->to($team->email, $team->captain()->name)->subject('Edit request token');
        });
    }
}