<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Objective;
use Response;

class ObjectiveController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $objective = Objective::with('status', 'mission')->where('id', $id)->get();

        return $objective;
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
        $objective = Objective::find($id);
        $objective->update($request->all());
        $objective->save();

        return Response::redirectTo('api/objective/'.$objective->id, 303);
    }
}
