<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\User', 5)->create();

        $users->each(function ($user) {

            $projects = $user->projects()->createMany(
                factory('App\Project', 5)->raw()
            );


            $projects->each(function ($project) {
                factory('App\Task', 5)->create([
                    'project_id' => $project->id,
                ]);
            });
        });
    }
}
