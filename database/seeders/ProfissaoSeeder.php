<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profissao')->insert([
            [
                'nome' => 'Candidato'
            ],
            [
                'nome' => 'Recrutador'
            ]
        ]);
    }
}
