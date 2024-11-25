<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Contacts')->insert([
            [
                "RFC" => "1",
                "Name" => "Estancia Infantil Vasco de Quiroga I.A.P",
                "Email" => "estanciainfantilvasco@hotmail.com",
                "Phone_Number" => "55 5257 2088",
                "Address" => "Ramón López Velarde # 7 colonia Lomas de Nuevo México",
                "dTimeStamp" => now(),
            ],
            [
                "RFC" => "1",
                "Name" => "Fundacion Semilla Durango",
                "Email" => "fundacionsemilla.dgo@gmail.com",
                "Phone_Number" => "618 817 5359",
                "Address" => "Avenida General Lázaro Cárdenas esquina con Mascareñas 507 sur, Durango, Mexico",
                "dTimeStamp" => now(),
            ],
            [
                "RFC" => "1",
                "Name" => "Asilo Primavera, I.A.P.",
                "Email" => "info@asiloprimavera.org",
                "Phone_Number" => "5555150269",
                "Address" => "Choapan No. 29 Col. Hipódromo, Alcaldía Cuauhtémoc. C.P. 06100  Ciudad de México",
                "dTimeStamp" => now(),
            ],
            [
                "RFC" => "1",
                "Name" => "Casa Hogar de las Niñas de Tláhuac, IAP",
                "Email" => "contacto@casahogarninas-iap.org.mx",
                "Phone_Number" => "5558459323",
                "Address" => "Piraña #5 , Col. Del Mar , Alcaldía Tláhuac , Mexico City, Mexico",
                "dTimeStamp" => now(),
            ],
            [
                "RFC" => "1",
                "Name" => "Centro de Atención Integral de Labio y Paladar Hendido, A.C.",
                "Email" => "info@centrosuma.org",
                "Phone_Number" => "55 1328 5514",
                "Address" => "Viaducto Miguel Alemán #121, Col. Escandón, I sección.",
                "dTimeStamp" => now(),
            ],

        ]);
    }
}
