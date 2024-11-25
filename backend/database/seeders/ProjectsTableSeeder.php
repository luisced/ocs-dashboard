<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Projects")->insert([
            [
                "Email" => "estanciainfantilvasco@hotmail.com",
                "Name" => "Estancia Infantil Vasco de Quiroga I.A.P",
                "Id_Contact" => 1,
                "Description" => "Promover un servicio responsable y humano, fomentando la colaboración entre padres y docentes.",
                "Objective" => "Fortalecer la formación integral y el desarrollo saludable de niños y niñas.",
                "ID_Type" => 1,
                "Photo" => "",
                "URL" => "https://www.facebook.com/p/estancia-infantil-vasco-de-quiroga-iap-100064701769756/",
                "Id_Social_Network" => 1,
                "Phone_Number" => "55 5257 2088",
                "Address" => "Ramón López Velarde # 7 colonia Lomas de Nuevo México",
                "Status" => True,
                "dTimeStamp" => now(),
            ],
            [
                "Name" => "Fundacion Semilla Durango",
                "Email" => "fundacionsemilla.dgo@gmail.com",
                "Phone_Number" => "618 817 5359",
                "Address" => "Avenida General Lázaro Cárdenas esquina con Mascareñas 507 sur, Durango, Mexico",
                "Id_Contact" => 2,
                "Description" => "Fundación Semilla apoya a niños indígenas de Durango, mejorando sus condiciones de vida.",
                "Objective" => "Impulsar el bienestar de comunidades indígenas infantiles.",
                "ID_Type" => 1,
                "Photo" => "",
                "URL" => "https://www.facebook.com/fundacionsemilla.dgo",
                "Id_Social_Network" => 2,
                "Status" => True,
                "dTimeStamp" => now(),
            ],
            [
                "Name" => "Asilo Primavera, I.A.P.",
                "Email" => "info@asiloprimavera.org",
                "Phone_Number" => "5555150269",
                "Address" => "Choapan No. 29 Col. Hipódromo, Alcaldía Cuauhtémoc. C.P. 06100  Ciudad de México",
                "Id_Contact" => 3,
                "Description" => "Apoyo integral a niños vulnerables de 6 a 13 años mediante educación y atención.",
                "Objective" => "Mejorar su situación de vulnerabilidad y desarrollo.",
                "ID_Type" => 1,
                "Photo" => "",
                "URL" => "https://www.asiloprimavera.org/",
                "Id_Social_Network" => 3,
                "Status" => True,
                "dTimeStamp" => now(),
            ],
            [
                "Name" => "Casa Hogar de las Niñas de Tláhuac, IAP",
                "Email" => "contacto@casahogarninas-iap.org.mx",
                "Phone_Number" => "5558459323",
                "Address" => "Piraña #5 , Col. Del Mar , Alcaldía Tláhuac , Mexico City, Mexico",
                "Id_Contact" => 4,
                "Description" => "Casa Hogar de Tláhuac brinda amor, educación y apoyo a niñas vulnerables de 6 a 12 años.",
                "Objective" => "Transformar sus vidas y construir un futuro brillante.",
                "ID_Type" => 1,
                "Photo" => "",
                "URL" => "https://www.facebook.com/casahogartlahuac",
                "Id_Social_Network" => 4,
                "Status" => True,
                "dTimeStamp" => now(),
            ],
            [
                "Name" => "Centro de Atención Integral de Labio y Paladar Hendido, A.C.",
                "Email" => "info@centrosuma.org",
                "Phone_Number" => "5513285514",
                "Address" => "Viaducto Miguel Alemán #121, Col. Escandón, I sección.",
                "Id_Contact" => 5,
                "Description" => "Centro Suma corrige quirúrgicamente labio y paladar hendido desde 2013, brindando atención especializada a niños y sus familias.",
                "Objective" => "Garantizar acceso a cuidados para maximizar el potencial infantil.",
                "ID_Type" => 2,
                "Photo" => "",
                "URL" => "https://www.centrosuma.org/",
                "Id_Social_Network" => 5,
                "Status" => True,
                "dTimeStamp" => now(),
            ],

        ]);
    }
}
