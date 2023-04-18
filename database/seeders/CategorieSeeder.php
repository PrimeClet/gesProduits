<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'libelle' => "Ordinateur",
            'description' => "Réunit tous les ordinateurs disponibles",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'libelle' => "Smartphones",
            'description' => "Réunit tous les smartphones disponibles",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'libelle' => "Tablettes",
            'description' => "Réunit toutes les Tablettes disponibles",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('categories')->insert([
            'libelle' => "Accessoires",
            'description' => "Réunit tous les Accessoires disponibles",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
