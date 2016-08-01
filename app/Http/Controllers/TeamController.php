<?php

namespace App\Http\Controllers;

use App\Contestant;
use App\Team;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function register(Request $request)
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:72',
            'tag' => 'required|min:3|max:6',
            'password' => 'required|min:4|max:24',
            // TODO: More validation (contestant details)
        ]);
        if ($validator->fails())
            return redirect('/team/register')->with(['status' => 'danger', 'message' => 'Invalid data!']);
        DB::beginTransaction();
        try {
            // Create team
            $team = new Team;
            $team->name = $request->input('name');
            $team->tag = $request->input('tag');
            $team->password = Hash::make($request->input('password'));
            $team->save();
            // Create all contestants
            for ($i = 1; $i <= 6; $i++) {
                if ($i == 6)
                    if ($request->input('first_name') == '')
                        continue;
                $c = new Contestant;
                $c->first_name = $request->input('first_name_' . $i);
                $c->last_name = $request->input('last_name_' . $i);
                $c->batch = $request->input('batch_' . $i);
                $c->summoner_name = $request->input('summoner_name_' . $i);
                $c->phone = $request->input('phone_' . $i);
                $c->facebook = $request->input('facebook_' . $i);
                $c->team_id = $team->id;
                $c->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/team/register')->with(['status' => 'danger', 'message' => 'Internal error! Please contact the admin!']);
        }
        return redirect('/team/register')->with(['status' => 'success', 'message' => 'Registration successes!']);
    }

    public function formPage()
    {
        return view('formtest');
    }

    private function failedResponse($msg = 'No additional information')
    {
        return response()->json([
            'result' => 'failed',
            'message' => 'Exception: ' . $msg
        ]);
    }
}
