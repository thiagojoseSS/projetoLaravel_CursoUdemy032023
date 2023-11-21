<?php

namespace Database\Seeders;

use App\Models\usuario;
use Database\Factories\UsuarioFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayInto = [
            [
                'nome' => 'user',
                'email' => 'user@user.com.br',
                'senha' => '12345678',
                'nivel' => 'user'
            ],
            [
                'nome' => 'admin',
                'email' => 'admin@admin.com.br',
                'senha' => '123',
                'nivel' => 'admin'
            ]
        ];
        usuario::insert($arrayInto);
    }
}
