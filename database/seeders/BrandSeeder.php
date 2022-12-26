<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Electimuss',
            'country' => 'England',
            'contact_email' => 'info@electimuss.com',
            'contact_phone' => '+210439212'

        ]);
    }
}
