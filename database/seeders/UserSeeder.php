<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name' => 'admin',
            'email' => 'admin@cyberdoctor.ao',
            'password' => '$2y$10$rJa8YbKstYUTUNGi.pBZgu.p7G/3EMrc9ozMb6luGs2nbAZ3JUXNG', //adminadmin
        ],
        ]);
    }
}
