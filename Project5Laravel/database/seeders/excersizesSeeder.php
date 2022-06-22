<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class excersizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('excersizes')->insert([
            'Name' => 'Squat',
            'Description' => 'maak een squat',
            'Image' => 'Image 1',
        ]);
        DB::table('excersizes')->insert([
            'Name' => 'Pushup',
            'Description' => 'maak een Pushup',
            'Image' => 'Image 2',
        ]);
        DB::table('excersizes')->insert([
            'Name' => 'Dip',
            'Description' => 'maak een Dip',
            'Image' => 'Image 3',
        ]);
        DB::table('excersizes')->insert([
            'Name' => 'Plank',
            'Description' => 'maak een Plank',
            'Image' => 'Image 4',
        ]);
        DB::table('excersizes')->insert([
            'Name' => 'Paardentrap',
            'Description' => 'maak een Paartdentrap',
            'Image' => 'Image 5',
        ]);
}
}
