<?php

namespace Database\Seeders;

use App\Models\FamiliaProfesional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliasProfesionalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FamiliaProfesional::truncate();
        foreach (self::$familias_profesionales as $familia) {
            FamiliaProfesional::insert([
                'nombre' => $familia['nombre'],
                'codigo' => $familia['codigo'],
                'descripcion' => $familia['descripcion'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->command->info('¡Tabla familias_profesionales inicializada con datos!');
    }

/* `marcapersonalfp`.`familias_profesionales` */
public static $familias_profesionales = array(
  array('codigo' => 'ADG','nombre' => 'ACTIVIDADES FÍSICAS Y DEPORTIVAS','descripcion' => 'Descripción de ACTIVIDADES FÍSICAS Y DEPORTIVAS'),
  array('codigo' => 'AFD','nombre' => 'ADMINISTRACIÓN Y GESTIÓN','descripcion' => 'Descripción de ADMINISTRACIÓN Y GESTIÓN'),
  array('codigo' => 'AGA','nombre' => 'AGRARIA','descripcion' => 'Descripción de AGRARIA'),
  array('codigo' => 'ARA','nombre' => 'ARTES Y ARTESANÍAS','descripcion' => 'Descripción de ARTES Y ARTESANÍAS'),
  array('codigo' => 'ARG','nombre' => 'ARTES GRÁFICAS','descripcion' => 'Descripción de ARTES GRÁFICAS'),
  array('codigo' => 'COM','nombre' => 'COMERCIO Y MARKETING','descripcion' => 'Descripción de COMERCIO Y MARKETING'),
  array('codigo' => 'ELE','nombre' => 'ELECTRICIDAD Y ELECTRÓNICA','descripcion'=>'Descripción de ELECTRICIDAD Y ELECTRÓNICA'),
  array('codigo' => 'ENA','nombre' => 'ENERGÍA Y AGUA','descripcion'=>'Descripción de ENERGÍA Y AGUA'),
  array('codigo' => 'EOC','nombre' => 'EDIFICACIÓN Y OBRA CIVIL','descripcion'=>'Descripción de EDIFICACIÓN Y OBRA CIVIL'),
  array('codigo' => 'FME','nombre' => 'FABRICACIÓN MECÁNICA','descripcion'=>'Descripción de FABRICACIÓN MECÁNICA'),
  array('codigo' => 'HOT','nombre' => 'HOSTELERÍA Y TURISMO','descripcion'=>'Descripción de HOSTELERÍA Y TURISMO'),
  array('codigo' => 'IEX','nombre' => 'INDUSTRIAS EXTRACTIVAS','descripcion'=>'Descripción de INDUSTRIAS EXTRACTIVAS'),
  array('codigo' => 'IFC','nombre' => 'INFORMÁTICA Y COMUNICACIONES','descripcion'=>'Descripción de INFORMÁTICA Y COMUNICACIONES'),
  array('codigo' => 'IMA','nombre' => 'INSTALACIÓN Y MANTENIMIENTO','descripcion'=>'Descripción de INSTALACIÓN Y MANTENIMIENTO'),
  array('codigo' => 'IMP','nombre' => 'IMAGEN PERSONAL','descripcion'=>'Descripción de IMAGEN PERSONAL'),
  array('codigo' => 'IMS','nombre' => 'IMAGEN Y SONIDO','descripcion'=>'Descripción de IMAGEN Y SONIDO'),
  array('codigo' => 'INA','nombre' => 'INDUSTRIAS ALIMENTARIAS','descripcion'=>'Descripción de INDUSTRIAS ALIMENTARIAS'),
  array('codigo' => 'MAM','nombre' => 'MADERA, MUEBLE Y CORCHO','descripcion'=>'Descripción de MADERA, MUEBLE Y CORCHO'),
  array('codigo' => 'MAP','nombre' => 'MARITÍMO-PESQUERA','descripcion'=>'Descripción de MARITÍMO-PESQUERA'),
  array('codigo' => 'QUI','nombre' => 'QUÍMICA','descripcion'=>'Descripción de QUÍMICA'),
  array('codigo' => 'SAN','nombre' => 'SANIDAD','descripcion'=>'Descripción de SANIDAD'),
  array('codigo' => 'SEA','nombre' => 'SEGURIDAD Y MEDIO AMBIENTE','descripcion'=>'Descripción de SEGURIDAD Y MEDIO AMBIENTE'),
  array('codigo' => 'SSC','nombre' => 'SERVICIOS SOCIOCULTURALES Y A LA COMUNIDAD','descripcion'=>'Descripción de SERVICIOS SOCIOCULTURALES Y A LA COMUNIDAD'),
  array('codigo' => 'TCP','nombre' => 'TEXTIL, CONFECCIÓN Y PIEL','descripcion'=>'Descripción de TEXTIL, CONFECCIÓN Y PIEL'),
  array('codigo' => 'TMV','nombre' => 'TRANSPORTE Y MANTENIMIENTO DE VEHÍCULOS','descripcion'=>'Descripción de TRANSPORTE Y MANTENIMIENTO DE VEHÍCULOS'),
  array('codigo' => 'VIC','nombre' => 'VIDRIO Y CERÁMICA','descripcion'=>'Descripción de VIDRIO Y CERÁMICA')
);

}
