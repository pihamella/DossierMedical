<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Secretaire;
use App\Models\Medecin;
use App\Models\User;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Douti",
            'role' => User::$MEDECIN,
            'email' => 'achiledouti@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name' => "Ella",
            'role' => User::$SECRETAIRE,
            'email' => 'ella@gmail.com',
            'secretaire_id' => Secretaire::all()->random()->id,
            'password' => Hash::make('123456'),
        ]);
    }
}
