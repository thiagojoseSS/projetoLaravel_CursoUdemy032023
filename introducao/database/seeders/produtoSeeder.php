<?php

namespace Database\Seeders;

use App\Models\produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        produto::factory()->count(50)->create()->each(function ($produtos){
            $produtos->save();
        });
    }
}
