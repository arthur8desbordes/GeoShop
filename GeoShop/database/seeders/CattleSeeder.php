<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CattleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cattles')->insert( [ [
            'name' => 'chicken',
            'description' => Str::random(100)
        ],
        [
            'name' => 'rabbit',
            'description' => Str::random(100)
        ],
        [
            'name' => 'cow',
            'description' => Str::random(100)
        ],
        [
            'name' => 'pig',
            'description' => Str::random(100)
        ]
    ]);
    }
}
