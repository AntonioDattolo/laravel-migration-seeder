<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class fakerSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) { 
           
            $newRecord = new Train();
            $newRecord->azienda = $faker->company();
            $newRecord->stazione_di_partenza = $faker->address();
            $newRecord->stazione_di_arrivo = $faker->address();
            $newRecord->orario_di_partenza = $faker->datetime();
            $newRecord->orario_di_arrivo = $faker->datetime();
            $newRecord->codice_treno = $faker->randomNumber(5, true);
            $newRecord->numero_di_carrozze = $faker->randomNumber(3, true);
            $newRecord->in_orario = 1;
            $newRecord->cancellato = 0;
            $newRecord->save();
        }
    }
}
