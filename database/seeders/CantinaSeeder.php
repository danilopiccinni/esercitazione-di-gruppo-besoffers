<?php

namespace Database\Seeders;

use App\Models\Cantina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class CantinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

            for ($i=0; $i < 10; $i++) {
                $cantina = new Cantina();
    
                $cantina->nome = $faker->words(3, true);
                $cantina->indirizzo = $faker->streetAddress();
                $cantina->comune = $faker->city();
                $cantina->provincia = $faker->stateAbbr();
                $cantina->regione = $faker->state();
                $cantina->nazione = $faker->country();
                $cantina->telefono = $faker->phoneNumber();
                $cantina->email = $faker->email();
    
                $cantina->save();
            }
        
    }
}
