<?php

namespace Database\Seeders;

use App\Models\Subcounty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcounty::factory()->create([
            'name' => 'Nairobi East',
        ]);
    }
}
