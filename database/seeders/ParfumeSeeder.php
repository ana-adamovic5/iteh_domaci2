<?php

namespace Database\Seeders;

use App\Models\Parfume;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parfume::insert([
            [
                'name' => 'IMPERIUM',
                'type' => 'woody',
                'price' => 225,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 1
            ],
            [
                'name' => 'SILVANUS',
                'type' => 'floral',
                'price' => 215,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 1
            ],
            [
                'name' => 'AURORA',
                'type' => 'oriental',
                'price' => 189,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 1
            ],
            [
                'name' => 'VIXERE',
                'type' => 'woody',
                'price' => 234,
                'size' => 100,
                'gender' => 'male',
                'collection_id' => 2
            ],
            [
                'name' => 'VICI LEATHER',
                'type' => 'woody',
                'price' => 222,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 2
            ],
            [
                'name' => 'SUMMANUS',
                'type' => 'fresh',
                'price' => 175,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 2
            ],
            [
                'name' => 'MERCURIAL CASHMERE',
                'type' => 'oriental',
                'price' => 225,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 2
            ],
            [
                'name' => 'CAPUA',
                'type' => 'woody',
                'price' => 200,
                'size' => 100,
                'gender' => 'male',
                'collection_id' => 2
            ],
            [
                'name' => 'BLACK CAVIAR',
                'type' => 'oriental',
                'price' => 250,
                'size' => 100,
                'gender' => 'male',
                'collection_id' => 2
            ],
            [
                'name' => 'PURITAS',
                'type' => 'fresh',
                'price' => 145,
                'size' => 100,
                'gender' => 'female',
                'collection_id' => 3
            ],
            [
                'name' => 'CELESTIAL',
                'type' => 'floral',
                'price' => 225,
                'size' => 50,
                'gender' => 'female',
                'collection_id' => 3
            ],
            [
                'name' => 'OCTAVIAN',
                'type' => 'woody',
                'price' => 215,
                'size' => 50,
                'gender' => 'male',
                'collection_id' => 4
            ],
            [
                'name' => 'AMBER AQUILARIA',
                'type' => 'fresh',
                'price' => 199,
                'size' => 100,
                'gender' => 'male',
                'collection_id' => 4
            ]
        ]);
    }
}
