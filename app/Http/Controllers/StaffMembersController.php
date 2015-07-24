<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StaffMember;
use Response;

class StaffMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $staff_members = StaffMember::with('mission')->get();

        return Response::json($staff_members, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $staff_member = new StaffMember;
        $staff_member->name = $request->name;
        $staff_member->position = $request->position;
        $staff_member->mission_id = $request->mission_id;
        $staff_member->save();

        return Response::redirectTo('api/staff_member/'.$staff_member->id, 302);
    }
}
