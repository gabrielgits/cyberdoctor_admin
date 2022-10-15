<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['category' => 'Other', 'icon' => 'outros.png'],
            ['category' => 'Computer', 'icon' => 'computador.png'],
            ['category' => 'PCs', 'icon' => 'pcs.png'],
            ['category' => 'MacBook', 'icon' => 'mackbook.png'],
            ['category' => 'Samsung Galaxy', 'icon' => 'samsunggalaxy.png'],
            ['category' => 'Iphone', 'icon' => 'iphone.png'],
            ['category' => 'WIFI', 'icon' => 'wifi.png'],
            ['category' => 'TV', 'icon' => 'tvplasma.png'],
            ['category' => 'Monitor', 'icon' => 'monitor.png'],
            ['category' => 'UPS', 'icon' => 'ups.png'],
            ['category' => 'Dstv/ZAP', 'icon' => 'dstvzap.png'],
            ['category' => 'Printer', 'icon' => 'impressora.png'],
        ]);
    }
}
