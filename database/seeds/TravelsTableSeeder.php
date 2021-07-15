<?php

use Illuminate\Database\Seeder;
use App\Travel;
class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travel');
        foreach ($arrayTravel as $item) {
            
            $travel = new Travel();
            
            $travel->src = $item["src"];
            $travel->tipo = $item["tipo"];
            $travel->destinazione = $item["destinazione"];
            $travel->struttura = $item["struttura"];
            $travel->n_notti = $item["n_notti"];
            $travel->localita = $item["localita"];
            $travel->prezzo = $item["prezzo"];
            $travel->disponibilita = $item["disponibilita"];
            $travel->descrizione = $item["descrizione"];
            
            $travel->save();
        }
    }
}
