<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mission;
use App\Objective;
use App\StaffMember;
use Response;

class SourceController extends Controller
{
    public static function objectivesStatusesChecked($id)
    {
        $mission_objectives = Objective::with('mission', 'status')->where('mission_id', $id)->get();

        foreach ($mission_objectives as $key => $objective)
        {
            $objectives_statuses [] = $objective->status_id;
        }

        if (!empty($objectives_statuses)) $count_of_achieved_id = array_count_values($objectives_statuses);

        if ( (!empty($count_of_achieved_id[4])) && ($count_of_achieved_id[4] == count($objectives_statuses)) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function missionCanceledCatched($id)
    {
        $staff_members = StaffMember::with('mission')->where('mission_id', $id)->get();

        $staff_members->each(function ($item) {
            $item->mission_id = null;
            $item->save();
        });

        $objectives = Objective::with('status', 'mission')->where('status_id', '!=', 5)->where('mission_id', $id)->get();

        $objectives->each(function ($item) {
            $item->status_id = 3;
            $item->save();
        });
    }

    public static function missionFinnishedCatched($id)
    {
        $staff_members = StaffMember::with('mission')->where('mission_id', $id)->get();

        $staff_members->each(function ($item) {
            $item->mission_id = null;
            $item->save();
        });
    }
}
