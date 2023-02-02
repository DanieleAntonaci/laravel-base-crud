<?php

namespace Database\Seeders;

use App\Models\Santo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Santo::factory() -> count(100) -> create();
    }
}
