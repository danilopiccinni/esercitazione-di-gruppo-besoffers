<?php

namespace Database\Seeders;

use App\Models\Vino;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class VinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $vino = new Vino();

            $vino->nome = $faker->words(2, true);
            $vino->annata = $faker->year();
            $vino->cantina = $faker->words(2, true);
            $vino->colore = $faker->randomElement(['rosso', 'rose', 'bianco']);
            $vino->tipologia = $faker->randomElement(['fermo', 'frizzante', 'passito']);
            $vino->gradazione = $faker->randomFloat(1, 0, 25) ;
            $vino->estratto = $faker->randomFloat(1, 9, 45);
            $vino->acidita = $faker->randomFloat(1, 4.5, 10);

            $vino->save();
        }
    }
}
