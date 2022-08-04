<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class SecretaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secretaire')->insert([
            'nom_secretaire' => "BOSS",
            'prenom_secretaire' => "Ella",
            'tel_secretaire' => '92447399',
        ]);
    }
}
