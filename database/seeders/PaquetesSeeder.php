<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        
        for($i=0; $i < 40; $i++){
            \DB::table('paquetes')->insert(array(
                'origen' => $faker->randomElement(['Quito','Cuenca', 'Macas', 'Guayaquil']),
                'destino'=> $faker->randomElement(['Quito','Cuenca', 'Macas', 'Guayaquil']),
                'confirmed'=> $faker->boolean(),
                'tipo'=>$faker->randomElement(['Express','Normal']), 
                'destinatario'=>$faker->streetAddress,
                'cliente_id'=>$faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
         ));
        }
    }
}
