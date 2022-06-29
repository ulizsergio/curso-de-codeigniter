<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Teste extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'enviando dados do controller parta view',
        ];
        return view ('teste', $data);
    }

    public function minha()
    {
        $data = [
            'cores' => 'branco, azul, vermelho, amarelo',
        ];
        return view ('minha', $data);
    }
}
