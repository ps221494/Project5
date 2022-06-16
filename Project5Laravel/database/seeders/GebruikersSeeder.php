<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Modeks\Gebruikers;

class GebruikersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gebruikers =[
            ['id' => 1, 'Naam' => 'Test1'],
            ['id' => 2, 'Naam' => 'Test2'],
            ['id' => 3, 'Naam' => 'Test3'],
        ];
        foreach ($gebruikers as $gebruiker)
        {
            Gebruikers::create($gebruiker);
        }
    }
}
