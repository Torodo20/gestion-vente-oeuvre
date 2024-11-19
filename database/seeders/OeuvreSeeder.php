<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Oeuvre;
use Illuminate\Database\Seeder;

class OeuvreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oeuvre::factory()->count(10)->create();
    }
}
