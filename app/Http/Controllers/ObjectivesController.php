<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Objective;
use Response;

class ObjectivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $objectives = Objective::with('status', 'mission')->get();

        return Response::json($objectives, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $objective = new Objective;
        $objective->type = $request->type;
        $objective->status_id = $request->status_id;
        $objective->mission_id = $request->mission_id;
        $objective->save();

        return Response::redirectTo('api/objective/'.$objective->id, 302);
    }
}
