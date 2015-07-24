<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StaffMember;
use Response;

class StaffMemberController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $staff_member = StaffMember::with('mission')->where('id', $id)->get();

        return $staff_member;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $staff_member = StaffMember::find($id);
        $staff_member->update($request->all());
        $staff_member->save();

        return Response::redirectTo('api/staff_member/'.$staff_member->id, 303);
    }
}
