<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         DB::table('roles')->insert([
             ['nom_role' => 'Administrateur'],
             ['nom_role' => 'Back Office'],
             ['nom_role' => 'Employé'],
         ]);
     }
        }