<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
            // $projectId = $request->project_id;
            // $startDate = $request->start_date;
            // $user = User::find(auth()->user()->id);
            // $project = Project::find($projectId);
            // $user->projects()->save($project, ['start_date' => $startDate]);
        auth()->user()->projects()->save(Project::find($request->project_id), ['start_date' => $request->start_date]);
        return 'Success';
    }
}
