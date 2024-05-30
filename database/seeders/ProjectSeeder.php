<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Project 1 description'
        ]);

        Project::create([
            'title' => 'Project 2',
            'description' => 'Project 2 description'
        ]);

        Project::create([
            'title' => 'Project 3',
            'description' => 'Project 3 description'
        ]);


    }
}
