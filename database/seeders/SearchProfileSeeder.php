<?php

namespace Database\Seeders;

use App\Models\SearchField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SearchProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SearchProfile::factory(44)->has(SearchField::factory(3),'fields')->create();
    }
}
