<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'ADMINSUPREMO',
            'email' => 'enem.naturezaadm@gmail.com',
            'password' => Hash::make('ADM_en3m_n@tur3z4'),
        ]);
    }
}
