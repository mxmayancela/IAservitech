<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0; $i < 20; $i++){
            \DB::table('clientes')->insert(array(
                'nombre' => $faker->firstNameMale,
                'apellido'=> $faker->lastName,
                'cedula'=> $faker->numberBetween($min = 0000000000, $max = 9999999999),
                'telefono'=>$faker->phoneNumber, 
                'direccion'=>$faker->streetAddress,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
         ));
        }
    }
}
