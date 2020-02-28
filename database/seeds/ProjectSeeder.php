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

        \Illuminate\Support\Facades\DB::table('workspaces')->insert([
            'name'                            => $kj = $faker->word,
            'slug'                            => $kj,
            'created_by'                      => App\User::inRandomOrder()->first()->id,
            'lang'                            => app()->getLocale(),
            'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                      => $faker->date($format = 'Y-m-d'),
        ]);

        \Illuminate\Support\Facades\DB::table('user_workspaces')->insert([
            'user_id'                         => App\User::inRandomOrder()->first()->id,
            'workspace_id'                    => \App\Project\Workspace::inRandomOrder()->first()->id,
            'permission'                      => 'Owner',
            'created_at'                      => $faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                      => $faker->date($format = 'Y-m-d'),
        ]);

        \Illuminate\Support\Facades\DB::table('projects')->insert([
            'name'                             => $kj2 = $faker->word,
            'status'                           => $faker->randomElement($array = ['Ongoing', 'Finished', 'OnHold']),
            'description'                      => $faker->text,
            'start_date'                       => \Carbon\Carbon::now(),
            'end_date'                         => $faker->date($format = 'Y-m-d', $min = 'now'),
            'budget'                           => $faker->numberBetween(1000, 1000 * 100),
            'workspace'                        => \App\Project\Workspace::inRandomOrder()->first()->id,
            'created_by'                       => App\User::inRandomOrder()->first()->id,
            'created_at'                       => $faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'                       => $faker->date($format = 'Y-m-d'),
        ]);
    }
}
