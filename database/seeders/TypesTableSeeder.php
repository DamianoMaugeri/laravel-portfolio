<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // aggiungo un array di possibili types

        $types=[ 
        'Web App',
        'Mobile App',
        'Game',
        'Data Science',
        'Machine Learning',
        'E-commerce',
        'Landing Page',
        'Tool interno',
        'Sito vetrina'
    ];

    foreach ($types as $type) {
        # code...

        $newType = new Type();

        $newType->name = $type;
        $newType->description = $faker->sentence();

        $newType->save();

    }




    }
}
