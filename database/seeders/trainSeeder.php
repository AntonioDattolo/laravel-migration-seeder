<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newRecord = new Train();
        $newRecord->azienda = "un'altra azienda strana";
        $newRecord->stazione_di_partenza = "un'altra stazione";
        $newRecord->stazione_di_arrivo = "ancora un'altra stazione";
        $newRecord->orario_di_partenza = "2024-07-03 15:30:15";
        $newRecord->orario_di_arrivo = "2024-07-03 15:30:15";
        $newRecord->codice_treno = "12348";
        $newRecord->numero_di_carrozze = "45";
        $newRecord->in_orario = 1;
        $newRecord->cancellato = 0;
        $newRecord->save();
    }
}
