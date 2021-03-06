<?php

namespace App\Http\Controllers;

use App\Captain;
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

    private $optionalNames = [
        "summoner_name_6" => 'min:3|max:16'
    ];

    private $successMessage = "การสมัครเสร็จสมบูรณ์การสมัครของคุณกำลังรอพิจราณา
    เราจะส่งข้อมูลการแข่งขันและรายละเอียดต่างๆของทีมผ่านทางเฟสบุ๊คโดยเร็วที่สุด";
    private $dbFailMessage = "เกิดข้อผิดพลาดกับระบบฐานข้อมูล 
    อาจจะเกิดจากว่าพบข้อมูลที่คุณกรอกมาอยู่ในฐานข้อมูลของเราแล้ว 
    กรุณาตรวจสอบให้แน่ใจว่ากรอกข้อมูลได้ถูกต้องแล้ว
    ถ้าหากคุณคิดว่าข้อมูลนั้นถูกต้องแล้ว โปรดติดต่อผู้ดูแลระบบ";
    private $invalidFailMessage = "ข้อมูลที่คุณกรอกไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง";
    private $teamExistsMessage = "ชื่อทีมมีคนใช้ไปแล้ว";
    private $nameExistsMessage = "มีข้อมูลผู้เข้าแข่งขันคนนี้ในฐานข้อมูลแล้ว";
    private $limitExceededMessage = "จำนวนทีมถึงขีดจำกัดแล้ว(32) โปรดติดต่อผู้ดูแลระบบ";
    public function register(Request $request)
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $arr = [
            'name' => 'required|min:3|max:72',
            'tag' => 'required|min:3|max:6',
            //'password' => 'required|min:4|max:24'
        ];
        $arr = $arr + $this->memberValidationRules();
        $validator = Validator::make($request->all(), $arr);
        $data = [];
        if ($validator->fails()) {
            $data = ['status' => 'danger', 'message' => $this->invalidFailMessage];
        } else if (count(Team::all()) >= 32) {
            $data = ['status' => 'danger', 'message' => $this->limitExceededMessage];
        } else {
            DB::beginTransaction();
            try {
                // Create team
                if (Team::where('name', '=', $request->input('name'))->exists()) {
                    $data = ['status' => 'danger', 'message' => $this->teamExistsMessage];
                } else {
                    $team = new Team;
                    $team->name = $request->input('name');
                    $team->tag = $request->input('tag');
                    $team->password = Hash::make($request->input('password'));
                    $team->email = $request->input('email');

                    $team->save();
                    $leaderId = 0;
                    // Create all contestants
                    for ($i = 1; $i <= 6; $i++) {
                        if ($i == 6)
                            if ($request->input('first_name_' . $i) == '')
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
                        if ($i == 1)
                            $leaderId = $c->id;
                    }
                    // Team captain
                    $captain = new Captain();
                    $captain->team_id = $team->id;
                    $captain->contestant_id = $leaderId;
                    $captain->save();
                    DB::commit();
                    $data = ['status' => 'success', 'message' => $this->successMessage];
                }
            } catch (\Exception $e) {
                DB::rollback();
                Log::error("Exception while inserting entry into the DB", ['message' => $e->getMessage(), 'stacktrace' => $e->getTraceAsString(),
                    'line' => $e->getLine()]);
                $data = ['status' => 'danger', 'message' => $this->dbFailMessage];
            }
        }
        if ($request->ajax())
            return response()->json($data);
        else
            return redirect('/team/register')->with($data);
    }

    public function edit()
    {

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

    private function memberValidationRules()
    {
        $validation = [];
        $names = [
            "first_name" => 'required',
            "last_name" => 'required',
            "batch" => 'required',
            "summoner_name" => 'required|min:3|max:16',
            "phone" => 'required',
            "facebook" => 'required'
        ];
        for ($i = 1; $i <= 5; $i++) foreach ($names as $name => $val) $validation[$name . '_' . $i] = $val;
        return $validation;
    }
}
