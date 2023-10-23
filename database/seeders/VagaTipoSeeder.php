<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vagas_tipo')->insert([
            [
                'nome' => 'CLT',
                'descricao' => 'Para candidatos CLT'
            ],
            [
                'nome' => 'PJ',
                'descricao' => 'Para candidatos PJ'
            ],
            [
                'nome' => 'Freelancer',
                'descricao' => 'Para candidatos Freelancer'
            ]
        ]);
    }
}
