<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $supports = [
            ['nom_support' => 'DVD', 'code' => 'DVD', 'duree_pret_jours' => 7, 'caution_euros' => 10.00, 'disponible_pret' => true],
            ['nom_support' => 'CD', 'code' => 'CD', 'duree_pret_jours' => 14, 'caution_euros' => 5.00, 'disponible_pret' => true],
            ['nom_support' => 'VHS', 'code' => 'VHS', 'duree_pret_jours' => 3, 'caution_euros' => 20.00, 'disponible_pret' => false],
        ];

        foreach ($supports as $support) {
            \App\Models\Support::create($support);
        }
    }
}
