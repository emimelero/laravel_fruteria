<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Fruta;
class FrutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for( $i = 0; $i < 6; $i++ ) {
            $faker = Faker::create();
            $frutas_usar = ['Platano', 'Pera', 'Manzana', 'Uva', 'Fresa', 'Melocoton'] ;
            $fruta = new Fruta();
            $fruta->nombre = $frutas_usar[$i];
            $fruta->temporada = $faker->randomElement(['Invierno', 'Verano', 'Otoño', 'Primavera']);
            $fruta->precio = $faker->randomFloat(1,0.5,5);
            $fruta->stock = $faker->randomDigit()*10;
            $fruta->created_at = date('Y-m-d H:m:s');
            $fruta->updated_at = date('Y-m-d H:m:s');
            $fruta->save();
    }
}
}