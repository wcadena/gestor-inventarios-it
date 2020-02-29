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
    }
}
