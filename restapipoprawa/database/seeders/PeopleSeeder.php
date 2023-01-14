<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        People::factory()
        ->count(50)
        ->create();
    }
}
