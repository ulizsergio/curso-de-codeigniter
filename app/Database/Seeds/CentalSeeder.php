<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CentalSeeder extends Seeder
{
    public function run()
    {
        $this ->call('CorSeeder');
    }
}
