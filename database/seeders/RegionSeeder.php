<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("regions")->insert([ "description" => "Región De Tarapacá"]);
        DB::table("regions")->insert([ "description" => "Región De Antofagasta"]);
        DB::table("regions")->insert([ "description" => "Región De Atacama"]);
        DB::table("regions")->insert([ "description" => "Región De Coquimbo"]);
        DB::table("regions")->insert([ "description" => "Región De Valparaíso"]);
        DB::table("regions")->insert([ "description" => "Región Del Libertador B. O'Higgins"]);
        DB::table("regions")->insert([ "description" => "Región Del Maule"]);
        DB::table("regions")->insert([ "description" => "Región Del Bíobío"]);
        DB::table("regions")->insert([ "description" => "Región De La Araucanía"]);
        DB::table("regions")->insert([ "description" => "Región De Los Lagos"]);
        DB::table("regions")->insert([ "description" => "Región De Aisén del Gral. C. Ibáñez del Campo"]);
        DB::table("regions")->insert([ "description" => "Región De Magallanes y de La Antártica Chilena"]);
        DB::table("regions")->insert([ "description" => "Región Metropolitana de Santiago"]);
        DB::table("regions")->insert([ "description" => "Región De Los Ríos"]);
        DB::table("regions")->insert([ "description" => "Región De Arica y Parinacota"]);
        DB::table("regions")->insert([ "description" => "Región De Ñuble"]);
    }
}
