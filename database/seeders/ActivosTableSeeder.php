<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activos;

class ActivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activos::factory()
            ->count(50)
            ->create();
    }
}
