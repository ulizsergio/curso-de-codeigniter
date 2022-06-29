<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CorSeeder extends Seeder
{
    public function run()
    {
        $corModel = new \App\Models\CorModel();

        $cores = [
            [
                'nome' => 'Amarela',
            ],
            [
                'nome' => 'Azul',
            ],
            [
                'nome' => 'Vermelha',
            ],
            [
                'nome' => 'Verde',
            ],
            [
                'nome' => 'Branca',
            ],
            
        ];

        dd($cores);
    }
}
