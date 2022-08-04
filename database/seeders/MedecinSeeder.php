<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedecinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medecins')->insert([
            'nom_medecin' => "Sir",
            'prenom_medecin' => "Ibn batouta",
            'tel_medecin' => '92447399',
            'specialite' => 'Cardiologue',
            'service' => 'Cardiologie',
        ]);

        DB::table('medecins')->insert([
            'nom_medecin' => "VODOUA",
            'prenom_medecin' => "von dutch",
            'tel_medecin' => '92442199',
            'specialite' => 'Dermatologue',
            'service' => 'Dermatologie',
        ]);
    }
}
