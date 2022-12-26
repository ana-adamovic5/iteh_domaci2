<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Collection::insert([
            [
                'name' => 'ETERNAL',
                'slogan' => 'LEGENDS OF LOVE, POWER & SEDUCTION',
                'description' => 'Roman culture had perfume woven through its fabric and culture.
                With an innate appreciation of the beautiful, Romans placed great emphasis on the finer things in life.
                ROME, the Eternal City forms the inspiration for this collection of daring, distinctive fragrances.',
                'brand_id' => 1
            ],
            [
                'name' => 'NERO',
                'slogan' => 'DECADENT POWERFUL ARTFUL',
                'description' => 'Emperor, poet, musician, artist and actor, Nero’s reign was synonymous with extravagance, epicurean pleasures and the arts.
                This collection of fragrances is unashamedly decadent, powerful, and artfully constructed.',
                'brand_id' => 1
            ],
            [
                'name' => 'LUSTROUS',
                'slogan' => 'RADIANT ARTFUL EXQUISITE',
                'description' => 'For the Romans the stars were the gateway to the Gods. 
                These enchanting perfumes capture the shimmering night sky, the sense of wonder and the eternal appeal of the heavens. 
                Discover our two intriguing, iridescent fragrances.',
                'brand_id' => 1
            ],
            [
                'name' => 'EMPEROR',
                'slogan' => 'EXQUISITE, RARE & SPECTACULAR',
                'description' => 'This collection of limited edition fragrances uses exquisite oils and resins of such rare quality that larger scale production is impossible. 
                Constructed by the finest of olfactory talents and created for connoisseurs.',
                'brand_id' => 1
            ]
        ]);
    }
}
