<?php

namespace Database\Seeders;

use App\Models\CovidCase;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CovidCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CovidCase::factory(10)->create();
    }
}
