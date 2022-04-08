<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("communes")->insert(["id_com" => 1, "description" => "Arica",	"id_reg" => 15]);
        DB::table("communes")->insert(["id_com" => 2, "description" => "Camarones",	"id_reg" => 15]);
        DB::table("communes")->insert(["id_com" => 3, "description" => "Putre",	"id_reg" => 15]);
        DB::table("communes")->insert(["id_com" => 4, "description" => "General Lagos",	"id_reg" => 15]);
        DB::table("communes")->insert(["id_com" => 5, "description" => "Iquique",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 6, "description" => "Camiña",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 7, "description" => "Colchane",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 8, "description" => "Huara",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 9, "description" => "Pica",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 10, "description" => "Pozo Almonte",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 11, "description" => "Alto Hospicio",	"id_reg" => 1]);
        DB::table("communes")->insert(["id_com" => 12, "description" => "Antofagasta",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 13, "description" => "Mejillones",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 14, "description" => "Sierra Gorda",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 15, "description" => "Taltal",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 16, "description" => "Calama",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 17, "description" => "Ollagüe",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 18, "description" => "San Pedro 3",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 19, "description" => "Tocopilla",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 20, "description" => "María Elena",	"id_reg" => 2]);
        DB::table("communes")->insert(["id_com" => 21, "description" => "Copiapó",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 22, "description" => "Caldera",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 23, "description" => "Tierra Amarilla",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 24, "description" => "Chañaral",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 25, "description" => "Diego de Almagro",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 26, "description" => "Vallenar",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 27, "description" => "Alto del Carmen",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 28, "description" => "Freirina",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 29, "description" => "Huasco",	"id_reg" => 3]);
        DB::table("communes")->insert(["id_com" => 30, "description" => "La Serena",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 31, "description" => "Coquimbo",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 32, "description" => "Andacollo",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 33, "description" => "La Higuera",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 34, "description" => "Paiguano",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 35, "description" => "Vicuña",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 36, "description" => "Illapel",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 37, "description" => "Canela",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 38, "description" => "Los Vilos",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 39, "description" => "Salamanca",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 40, "description" => "Ovalle",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 41, "description" => "Combarbalá",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 42, "description" => "Monte Patria",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 43, "description" => "Punitaqui",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 44, "description" => "Río Hurtado",	"id_reg" => 4]);
        DB::table("communes")->insert(["id_com" => 45, "description" => "Valparaíso",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 46, "description" => "Casablanca",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 47, "description" => "Concón",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 48, "description" => "Juan Fernández",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 49, "description" => "Puchuncaví",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 50, "description" => "Quilpué",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 51, "description" => "Quintero",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 52, "description" => "Villa Alemana",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 53, "description" => "Viña del Mar",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 54, "description" => "Isla  de Pascua",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 55, "description" => "Los Andes",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 56, "description" => "Calle Larga",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 57, "description" => "Rinconada",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 58, "description" => "San Esteban",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 59, "description" => "La Ligua",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 60, "description" => "Cabildo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 61, "description" => "Papudo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 62, "description" => "Petorca",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 63, "description" => "Zapallar",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 64, "description" => "Quillota",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 65, "description" => "Calera",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 66, "description" => "Hijuelas",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 67, "description" => "La Cruz",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 68, "description" => "Limache",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 69, "description" => "Nogales",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 70, "description" => "Olmué",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 71, "description" => "San Antonio",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 72, "description" => "Algarrobo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 73, "description" => "Cartagena",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 74, "description" => "El Quisco",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 75, "description" => "El Tabo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 76, "description" => "Santo Domingo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 77, "description" => "San Felipe",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 78, "description" => "Catemu",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 79, "description" => "Llaillay",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 80, "description" => "Panquehue",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 81, "description" => "Putaendo",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 82, "description" => "Santa María",	"id_reg" => 5]);
        DB::table("communes")->insert(["id_com" => 83, "description" => "Rancagua",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 84, "description" => "Codegua",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 85, "description" => "Coinco",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 86, "description" => "Coltauco",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 87, "description" => "Doñihue",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 88, "description" => "Graneros",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 89, "description" => "Las Cabras",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 90, "description" => "Machalí",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 91, "description" => "Malloa",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 92, "description" => "Mostazal",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 93, "description" => "Olivar",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 94, "description" => "Peumo",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 95, "description" => "Pichidegua",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 96, "description" => "Quinta de Tilcoco",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 97, "description" => "Rengo",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 98, "description" => "Requínoa",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 99, "description" => "San Vicente",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 100, "description" => "Pichilemu",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 101, "description" => "La Estrella",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 102, "description" => "Litueche",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 103, "description" => "Marchihue",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 104, "description" => "Navidad",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 105, "description" => "Paredones",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 106, "description" => "San Fernando",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 107, "description" => "Chépica",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 108, "description" => "Chimbarongo",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 109, "description" => "Lolol",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 110, "description" => "Nancagua",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 111, "description" => "Palmilla",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 112, "description" => "Peralillo",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 113, "description" => "Placilla",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 114, "description" => "Pumanque",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 115, "description" => "Santa Cruz",	"id_reg" => 6]);
        DB::table("communes")->insert(["id_com" => 116, "description" => "Talca",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 117, "description" => "Constitución",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 118, "description" => "Curepto",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 119, "description" => "Empedrado",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 120, "description" => "Maule",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 121, "description" => "Pelarco",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 122, "description" => "Pencahue",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 123, "description" => "Río Claro",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 124, "description" => "San Clemente",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 125, "description" => "San Rafael",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 126, "description" => "Cauquenes",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 127, "description" => "Chanco",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 128, "description" => "Pelluhue",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 129, "description" => "Curicó",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 130, "description" => "Hualañé",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 131, "description" => "Licantén",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 132, "description" => "Molina",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 133, "description" => "Rauco",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 134, "description" => "Romeral",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 135, "description" => "Sagrada Familia",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 136, "description" => "Teno",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 137, "description" => "Vichuquén",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 138, "description" => "Linares",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 139, "description" => "Colbún",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 140, "description" => "Longaví",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 141, "description" => "Parral",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 142, "description" => "Retiro",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 143, "description" => "San Javier",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 144, "description" => "Villa Alegre",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 145, "description" => "Yerbas Buenas",	"id_reg" => 7]);
        DB::table("communes")->insert(["id_com" => 146, "description" => "Concepción",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 147, "description" => "Coronel",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 148, "description" => "Chiguayante",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 149, "description" => "Florida",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 150, "description" => "Hualqui",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 151, "description" => "Lota",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 152, "description" => "Penco",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 153, "description" => "San Pedro de la Paz",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 154, "description" => "Santa Juana",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 155, "description" => "Talcahuano",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 156, "description" => "Tomé",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 157, "description" => "Hualpén",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 158, "description" => "Lebu",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 159, "description" => "Arauco",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 160, "description" => "Cañete",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 161, "description" => "Contulmo",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 162, "description" => "Curanilahue",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 163, "description" => "Los Álamos",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 164, "description" => "Tirúa",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 165, "description" => "Los Ángeles",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 166, "description" => "Antuco",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 167, "description" => "Cabrero",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 168, "description" => "Laja",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 169, "description" => "Mulchén",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 170, "description" => "Nacimiento",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 171, "description" => "Negrete",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 172, "description" => "Quilaco",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 173, "description" => "Quilleco",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 174, "description" => "San Rosendo",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 175, "description" => "Santa Bárbara",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 176, "description" => "Tucapel",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 177, "description" => "Yumbel",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 178, "description" => "Alto Biobío",	"id_reg" => 8]);
        DB::table("communes")->insert(["id_com" => 179, "description" => "Chillán",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 180, "description" => "Bulnes",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 181, "description" => "Cobquecura",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 182, "description" => "Coelemu",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 183, "description" => "Coihueco",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 184, "description" => "Chillán Viejo",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 185, "description" => "El Carmen",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 186, "description" => "Ninhue",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 187, "description" => "Ñiquén",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 188, "description" => "Pemuco",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 189, "description" => "Pinto",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 190, "description" => "Portezuelo",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 191, "description" => "Quillón",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 192, "description" => "Quirihue",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 193, "description" => "Ránquil",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 194, "description" => "San Carlos",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 195, "description" => "San Fabián",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 196, "description" => "San Ignacio",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 197, "description" => "San Nicolás",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 198, "description" => "Treguaco",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 199, "description" => "Yungay",	"id_reg" => 16]);
        DB::table("communes")->insert(["id_com" => 200, "description" => "Temuco",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 201, "description" => "Carahue",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 202, "description" => "Cunco",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 203, "description" => "Curarrehue",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 204, "description" => "Freire",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 205, "description" => "Galvarino",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 206, "description" => "Gorbea",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 207, "description" => "Lautaro",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 208, "description" => "Loncoche",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 209, "description" => "Melipeuco",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 210, "description" => "Nueva Imperial",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 211, "description" => "Padre Las Casas",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 212, "description" => "Perquenco",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 213, "description" => "Pitrufquén",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 214, "description" => "Pucón",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 215, "description" => "Saavedra",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 216, "description" => "Teodoro Schmidt",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 217, "description" => "Toltén",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 218, "description" => "Vilcún",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 219, "description" => "Villarrica",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 220, "description" => "Cholchol",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 221, "description" => "Angol",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 222, "description" => "Collipulli",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 223, "description" => "Curacautín",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 224, "description" => "Ercilla",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 225, "description" => "Lonquimay",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 226, "description" => "Los Sauces",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 227, "description" => "Lumaco",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 228, "description" => "Purén",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 229, "description" => "Renaico",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 230, "description" => "Traiguén",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 231, "description" => "Victoria",	"id_reg" => 9]);
        DB::table("communes")->insert(["id_com" => 232, "description" => "Valdivia",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 233, "description" => "Corral",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 234, "description" => "Futrono",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 235, "description" => "La Unión",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 236, "description" => "Lago Ranco",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 237, "description" => "Lanco",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 238, "description" => "Los Lagos",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 239, "description" => "Máfil",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 240, "description" => "Mariquina",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 241, "description" => "Paillaco",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 242, "description" => "Panguipulli",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 243, "description" => "Río Bueno",	"id_reg" => 14]);
        DB::table("communes")->insert(["id_com" => 244, "description" => "Puerto Montt",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 245, "description" => "Calbuco",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 246, "description" => "Cochamó",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 247, "description" => "Fresia",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 248, "description" => "Frutillar",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 249, "description" => "Los Muermos",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 250, "description" => "Llanquihue",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 251, "description" => "Maullín",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 252, "description" => "Puerto Varas",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 253, "description" => "Castro",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 254, "description" => "Ancud",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 255, "description" => "Chonchi",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 256, "description" => "Curaco de Vélez",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 257, "description" => "Dalcahue",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 258, "description" => "Puqueldón",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 259, "description" => "Queilén",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 260, "description" => "Quellón",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 261, "description" => "Quemchi",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 262, "description" => "Quinchao",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 263, "description" => "Osorno",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 264, "description" => "Puerto Octay",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 265, "description" => "Purranque",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 266, "description" => "Puyehue",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 267, "description" => "Río Negro",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 268, "description" => "San Juan de la Costa",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 269, "description" => "San Pablo",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 270, "description" => "Chaitén",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 271, "description" => "Futaleufú",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 272, "description" => "Hualaihué",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 273, "description" => "Palena",	"id_reg" => 10]);
        DB::table("communes")->insert(["id_com" => 274, "description" => "Coihaique",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 275, "description" => "Lago Verde",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 276, "description" => "Aisén",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 277, "description" => "Cisnes",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 278, "description" => "Guaitecas",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 279, "description" => "Cochrane",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 280, "description" => "O'Higgins",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 281, "description" => "Tortel",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 282, "description" => "Chile Chico",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 283, "description" => "Río Ibáñez",	"id_reg" => 11]);
        DB::table("communes")->insert(["id_com" => 284, "description" => "Punta Arenas",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 285, "description" => "Laguna Blanca",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 286, "description" => "Río Verde",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 287, "description" => "San Gregorio",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 288, "description" => "Cabo de Hornos",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 289, "description" => "Antártica",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 290, "description" => "Porvenir",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 291, "description" => "Primavera",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 292, "description" => "Timaukel",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 293, "description" => "Natales",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 294, "description" => "Torres del Paine",	"id_reg" => 12]);
        DB::table("communes")->insert(["id_com" => 295, "description" => "Santiago",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 296, "description" => "Cerrillos",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 297, "description" => "Cerro Navia",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 298, "description" => "Conchalí",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 299, "description" => "El Bosque",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 300, "description" => "Estación Central",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 301, "description" => "Huechuraba",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 302, "description" => "Independencia",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 303, "description" => "La Cisterna",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 304, "description" => "La Florida",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 305, "description" => "La Granja",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 306, "description" => "La Pintana",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 307, "description" => "La Reina",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 308, "description" => "Las Condes",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 309, "description" => "Lo Barnechea",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 310, "description" => "Lo Espejo",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 311, "description" => "Lo Prado",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 312, "description" => "Macul",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 313, "description" => "Maipú",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 314, "description" => "Ñuñoa",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 315, "description" => "Pedro Aguirre Cerda",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 316, "description" => "Peñalolén",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 317, "description" => "Providencia",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 318, "description" => "Pudahuel",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 319, "description" => "Quilicura",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 320, "description" => "Quinta Normal",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 321, "description" => "Recoleta",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 322, "description" => "Renca",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 323, "description" => "San Joaquín",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 324, "description" => "San Miguel",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 325, "description" => "San Ramón",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 326, "description" => "Vitacura",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 327, "description" => "Puente Alto",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 328, "description" => "Pirque",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 329, "description" => "San José de Maipo",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 330, "description" => "Colina",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 331, "description" => "Lampa",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 332, "description" => "Tiltil",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 333, "description" => "San Bernardo",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 334, "description" => "Buin",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 335, "description" => "Calera de Tango",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 336, "description" => "Paine",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 337, "description" => "Melipilla",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 338, "description" => "Alhué",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 339, "description" => "Curacaví",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 340, "description" => "María Pinto",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 341, "description" => "San Pedro",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 342, "description" => "Talagante",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 343, "description" => "El Monte",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 344, "description" => "Isla de Maipo",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 345, "description" => "Padre Hurtado",	"id_reg" => 13]);
        DB::table("communes")->insert(["id_com" => 346, "description" => "Peñaflor",	"id_reg" => 13]);

    }
}
