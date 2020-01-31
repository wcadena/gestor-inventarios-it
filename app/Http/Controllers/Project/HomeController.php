<?php

namespace App\Http\Controllers\Project;

use App\ClientProject;
use App\ClientWorkspace;
use App\User;
use App\Utility;
use App\UserProject;
use App\Task;
use App\Todo;
use App\UserWorkspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug = '')
    {
        $userObj = Auth::user();
        $currantWorkspace = Utility::getWorkspaceBySlug($slug);
        if($currantWorkspace) {
            if($userObj->getGuard() == 'client') {

                $totalProject = ClientProject::join("projects", "projects.id", "=", "client_projects.project_id")->where("client_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->count();
                $totalBugs = ClientProject::join("bug_reports", "bug_reports.project_id", "=", "client_projects.project_id")->join("projects", "projects.id", "=", "client_projects.project_id")->where('projects.workspace', '=', $currantWorkspace->id)->count();
                $totalTask = ClientProject::join("tasks", "tasks.project_id", "=", "client_projects.project_id")->join("projects", "projects.id", "=", "client_projects.project_id")->where('projects.workspace', '=', $currantWorkspace->id)->where("client_id", "=", $userObj->id)->count();
                $completeTask = ClientProject::join("tasks", "tasks.project_id", "=", "client_projects.project_id")->join("projects", "projects.id", "=", "client_projects.project_id")->where('projects.workspace', '=', $currantWorkspace->id)->where("client_id", "=", $userObj->id)->where('tasks.status', '=', 'done')->count();
                $tasks = Task::select('tasks.*')->join("client_projects", "tasks.project_id", "=", "client_projects.project_id")->join("projects", "projects.id", "=", "client_projects.project_id")->where('projects.workspace', '=', $currantWorkspace->id)->where("client_id", "=", $userObj->id)->orderBy('tasks.id', 'desc')->limit(4)->get();
                $totalMembers = UserWorkspace::where('workspace_id', '=', $currantWorkspace->id)->count();
                $projectProcess = ClientProject::join("projects", "projects.id", "=", "client_projects.project_id")->where('projects.workspace', '=', $currantWorkspace->id)->where("client_id", "=", $userObj->id)->groupBy('projects.status')->selectRaw('count(projects.id) as count, projects.status')->pluck('count', 'projects.status');


                $arrProcessPer = [];
                $arrProcessLable = [];
                foreach ($projectProcess as $lable => $process) {
                    $arrProcessLable[] = $lable;
                    $arrProcessPer[] = round(($process * 100) / $totalProject, 2);
                }
                $arrProcessClass = ['text-success', 'text-primary', 'text-danger'];
                $chartData = app('App\Http\Controllers\ProjectController')->getProjectChart(['workspace_id' => $currantWorkspace->id, 'duration' => 'week']);

                return view('home', compact('currantWorkspace', 'totalProject', 'totalBugs', 'totalTask', 'totalMembers', 'arrProcessLable', 'arrProcessPer', 'arrProcessClass', 'completeTask', 'tasks', 'chartData'));

            }else{
                $totalProject = UserProject::join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->count();

                if ($currantWorkspace->permission == 'Owner') {
                    $totalBugs = UserProject::join("bug_reports", "bug_reports.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->count();
                    $totalTask = UserProject::join("tasks", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->count();
                    $completeTask = UserProject::join("tasks", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.status', '=', 'done')->count();
                    $tasks = Task::select('tasks.*')->join("user_projects", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->orderBy('tasks.id', 'desc')->limit(4)->get();
                } else {
                    $totalBugs = UserProject::join("bug_reports", "bug_reports.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.assign_to', '=', $userObj->id)->count();
                    $totalTask = UserProject::join("tasks", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.assign_to', '=', $userObj->id)->count();
                    $completeTask = UserProject::join("tasks", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.assign_to', '=', $userObj->id)->where('tasks.status', '=', 'done')->count();
                    $tasks = Task::select('tasks.*')->join("user_projects", "tasks.project_id", "=", "user_projects.project_id")->join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->where('tasks.assign_to', '=', $userObj->id)->orderBy('tasks.id', 'desc')->limit(4)->get();
                }


                $totalMembers = UserWorkspace::where('workspace_id', '=', $currantWorkspace->id)->count();

                $projectProcess = UserProject::join("projects", "projects.id", "=", "user_projects.project_id")->where("user_id", "=", $userObj->id)->where('projects.workspace', '=', $currantWorkspace->id)->groupBy('projects.status')->selectRaw('count(projects.id) as count, projects.status')->pluck('count', 'projects.status');
                $arrProcessLable = [];
                $arrProcessPer = [];
                $arrProcessLable = [];
                foreach ($projectProcess as $lable => $process) {
                    $arrProcessLable[] = $lable;
                    $arrProcessPer[] = round(($process * 100) / $totalProject, 2);
                }
                $arrProcessClass = ['text-success', 'text-primary', 'text-danger'];

                $chartData = app('App\Http\Controllers\ProjectController')->getProjectChart(['workspace_id' => $currantWorkspace->id, 'duration' => 'week']);

                return view('home', compact('currantWorkspace', 'totalProject', 'totalBugs', 'totalTask', 'totalMembers', 'arrProcessLable', 'arrProcessPer', 'arrProcessClass', 'completeTask', 'tasks', 'chartData'));
            }
        }
        else{
            return view('home', compact('currantWorkspace'));
        }
    }
}
