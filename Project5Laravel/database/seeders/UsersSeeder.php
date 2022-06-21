<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users =[
            ['id' => 1, 'Gebruikersnaam' => 'Test1'],
            ['id' => 2, 'Gebruikersnaam' => 'Test2'],
            ['id' => 3, 'Gebruikersnaam' => 'Test3'],
        ];
        foreach ($Users as $User)
        {
            Users::create($User);
        }
    }
}
