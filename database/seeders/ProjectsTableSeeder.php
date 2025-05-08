<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $newProject = new Project();

        $newProject->name ='Portfolio';
        $newProject->lang = 'PHP';
        $newProject->description = 'Progetto per creare un applicativo dove raccogliere e mostrare tutti i miei progetti';
        $newProject->team = false;

        $newProject->save();


    }
}
