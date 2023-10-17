<?php

namespace Database\Seeders;

use App\Models\PropertyField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Property::factory(33)->has(PropertyField::factory(3),'fields')->create();

    }
}
