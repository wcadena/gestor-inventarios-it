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
        $faker = \Faker\Factory::create();

        factory(\App\Project\Workspace::class)->make()->save();
        factory(\App\Project\Workspace::class)->make()->save();

        factory(\App\Project\UserWorkspace::class)->make()->save();

        $projects = factory(\App\Project\Project::class, 6)->make();
        foreach ($projects as $project) {
            $project->save();
        }

        $clients = factory(\App\Project\Client::class, 6)->make();
        foreach ($clients as $client) {
            $client->save();
        }

        factory(\App\Project\ClientProject::class)->make()->save();
        factory(\App\Project\Milestone::class)->make()->save();

        factory(\App\Project\Note::class)->make()->save();
        $UserProjects = factory(\App\Project\UserProject::class, 2)->make();
        foreach ($UserProjects as $UserProject) {
            $UserProject->save();
        }

        $tasks = factory(\App\Project\Task::class, 5)->make();
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
}
