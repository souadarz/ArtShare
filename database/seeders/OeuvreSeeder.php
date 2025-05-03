<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use Faker\Factory as Faker;

class OeuvreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('fr_FR');
        
        // Récupérer les IDs existants pour les relations
        $userIds = User::where('role', 'artiste')->pluck('id')->toArray();
        $categoryIds = Category::pluck('id')->toArray();
        
        // S'assurer qu'il y a des utilisateurs et des catégories
        if (empty($userIds) || empty($categoryIds)) {
            $this->command->info('Veuillez d\'abord créer des utilisateurs et des catégories.');
            return;
        }
        
        // Créer 20 oeuvres
        for ($i = 0; $i < 10; $i++) {
            DB::table('oeuvres')->insert([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'image' => '9U44HeuifMrEe8V9cfyJheO69bfQwZ4v8x942igF.jpg',
                'category_id' => $faker->randomElement($categoryIds),
                'user_id' => $faker->randomElement($userIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

