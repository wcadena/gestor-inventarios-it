<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Auth::login(App\User::inRandomOrder()->first());

        $workspace = factory(\App\Project\Workspace::class)->make();
        $workspace->save();

        $client1 = factory(\App\Project\Client::class)->make();
        $client1->save();
        $client2 = factory(\App\Project\Client::class)->make();
        $client2->save();

        $users = \App\User::all();

        foreach ($users as $user) {
            factory(\App\Project\UserWorkspace::class)->make(
                [
                    'workspace_id' => $workspace->id,
                    'user_id'      => $user->id,
                ]
            )->save();

            $projects = factory(\App\Project\Project::class, 6)->make(
                [
                    'workspace'  => $workspace->id,
                ]
            );
            foreach ($projects as $project) {
                $project->save();
                factory(\App\Project\ClientProject::class)->make(
                    [
                        'client_id' => $client1->id,
                        'project_id'=> $project->id,
                    ]
                )->save();
                factory(\App\Project\ClientProject::class)->make(
                    [
                        'client_id' => $client2->id,
                        'project_id'=> $project->id,
                    ]
                )->save();
                factory(\App\Project\UserProject::class)->make(
                    [
                        'user_id'   => $user->id,
                        'project_id'=> $project->id,
                    ]
                )->save();

                $milestone = factory(\App\Project\Milestone::class)->make();
                $milestone->save();
                $tasks = factory(\App\Project\Task::class, 5)->make(
                    [
                        'project_id'   => $project->id,
                        'milestone_id' => $milestone->id,
                    ]
                );

                foreach ($tasks as $task) {
                    $task->save();
                    $subtasks = factory(\App\Project\SubTask::class, 7)->make([
                        'task_id' => $task->id,
                    ]);
                    foreach ($subtasks as $subtask) {
                        $subtask->save();
                    }
                }
            }
            factory(\App\Project\Note::class)->make(
                [
                    'workspace'         => $workspace->id,
                    'created_by'        => $user->id,
                ]
            )->save();
        }


        $UserProjects = factory(\App\Project\UserProject::class, 2)->make();
        foreach ($UserProjects as $UserProject) {
            $UserProject->save();
        }
    }
}
