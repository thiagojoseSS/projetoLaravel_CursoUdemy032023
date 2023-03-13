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
        $produto = produto::factory()->create();
        system($produto);
        produto::factory()->count(5000)->create()->each(function ($produtos){
            $produtos->save();
            
        });
    }
}
