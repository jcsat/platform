<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Objeto;


class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objetos = Objeto::factory(20)->create();

        foreach($objetos as $objeto){
            Image::factory(1)->create([
                'imageable_id' => $objeto->id,
                'imageable_type' => Objeto::class
            ]);
        }
    }
}
 