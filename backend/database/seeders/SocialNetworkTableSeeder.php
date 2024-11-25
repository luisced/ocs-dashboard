<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SocialNetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Social_Network')->insert([
            [
                "User" => "Estancia Infantil Vasco de Quiroga I.A.P",
                "Social_Network" => "Facebook"
            ],
            [
                "User" => "Fundacion Semilla Durango",
                "Social_Network" => "Facebook"
            ],
            [
                "User" => "Asilo Primavera IAP",
                "Social_Network" => "Facebook"
            ],
            [
                "User" => "Casa Hogar de las Niñas de Tláhuac, IAP ",
                "Social_Network" => "Facebook"
            ],
            [
                "User" => "Centro SUMA",
                "Social_Network" => "Facebook"
            ],

        ]);
    }
}
