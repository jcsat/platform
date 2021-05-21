<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Image;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $eventos = Evento::factory(20)->create();

        foreach($eventos as $evento){
            Image::factory(1)->create([
                'imageable_id' => $evento->id,
                'imageable_type' => Evento::class
            ]);
        }
    }
}
