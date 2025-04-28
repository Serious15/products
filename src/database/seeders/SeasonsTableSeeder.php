<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::insert([
            ['name' => '春', 'start_month' => 3, 'end_month' => 5],
            ['name' => '夏', 'start_month' => 6, 'end_month' => 8],
            ['name' => '秋', 'start_month' => 9, 'end_month' => 11],
            ['name' => '冬', 'start_month' => 12, 'end_month' => 2],
        ]);
    }
}
