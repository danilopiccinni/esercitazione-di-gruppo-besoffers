<?php

namespace Database\Seeders;

use App\Models\Vitigno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class VitignoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $vitigno = new Vitigno();

            $vitigno->nome = $faker->words(3, true);
            $vitigno->descrizione = $faker->paragraph();

            $vitigno->save();
        }
    }
}
