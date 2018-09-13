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
        $admin = DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Kupesan',
            'email' => 'admin@kupesan.id',
            'password' => bcrypt('icon@2018')]
        );

        $role = DB::table('role_user')->insert([
                'user_id' => $admin['id'],
                'role_id' => '1',
        ]);
    }
}
