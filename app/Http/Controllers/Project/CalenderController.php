<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Project\Task;
use App\Project\Utility;
use Illuminate\Support\Facades\Auth;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $currantWorkspace = Utility::getWorkspaceBySlug($slug);
        $tasks = Task::select('tasks.*')->join('projects', 'projects.id', '=', 'tasks.project_id')->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.assign_to', '=', Auth::user()->id)->get();
        $arrayJson = [];
        foreach ($tasks as $task) {
            $arrayJson[] = [
                'title'      => $task->title,
                'start'      => $task->due_date,
                'url'        => route('project.tasks.show', [$currantWorkspace->slug, $task->project_id, $task->id]),
                'classNames' => (($task->priority == 'Medium') ? 'bg-warning border-warning' : (($task->priority == 'High') ? 'bg-danger border-danger' : '')),
            ];
        }

        return view('project.calendar.index', compact('currantWorkspace', 'arrayJson'));
    }
}
