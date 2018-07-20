<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles = [
            ['id' => 1, 'role_name' => 'admin'],
            ['id' => 2, 'role_name' => 'user'],
            ['id' => 3, 'role_name' => 'partner'],
        ];

        DB::table('roles')->insert($roles);
    }
}
