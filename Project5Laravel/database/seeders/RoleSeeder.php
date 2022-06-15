<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'rname' => 'gebruiker'],
            ['id' => 999, 'rname' => 'beheerder'],
        ];
            

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
