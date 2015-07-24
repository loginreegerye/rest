<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mission;
use Response;

class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $missions = Mission::with('status', 'staffMembers', 'objectives.status')->get();

        return Response::json($missions, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $mission = new Mission;
        $mission->name = $request->name;
        $mission->status_id = $request->status_id;
        $mission->save();

        return Response::redirectTo('api/mission/'.$mission->id, 302);
    }
}
