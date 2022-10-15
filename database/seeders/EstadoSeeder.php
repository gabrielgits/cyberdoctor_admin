<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert([
            ['state' => 'Accept'],
            ['state' => 'draft'],
            ['state' => 'Pending'],
            ['state' => 'Refused'],
            ['state' => 'Blocked'],
        ]);
    }
}
