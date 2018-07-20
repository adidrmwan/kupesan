<?php

use Illuminate\Database\Seeder;

class PartnerTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['id' => 1, 'type_name' => 'Foto Studio'],
            ['id' => 2, 'type_name' => 'Fotografer'],
            ['id' => 3, 'type_name' => 'MUA'],
            ['id' => 4, 'type_name' => 'Kebaya'],
        ];

        DB::table('partner_type')->insert($types);
    }
}
