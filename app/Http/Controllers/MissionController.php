<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mission;
use App\Objective;
use Response;

class MissionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if (SourceController::objectivesStatusesChecked($id))
        {
            $mission = Mission::find($id);
            $mission->status_id = 5;
            $mission->save();
        }

        $result = Mission::with('status', 'staffMembers', 'objectives.status')->where('id', $id)->get();

        return Response::json($result, 200);
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
        $mission = Mission::find($id);
        $mission->update($request->all());
        $mission->save();

        if ($request->status_id == 3)
        {
            SourceController::missionCanceledCatched($id);
        }

        if ($request->status_id == 5)
        {
            SourceController::missionFinnishedCatched($id);
        }

        return Response::redirectTo('api/mission/'.$mission->id, 303);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
