<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Aporte;

class AporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aportes = Aporte::factory(20)->create();

        foreach($aportes as $aporte){
            Image::factory(1)->create([
                'imageable_id' => $aporte->id,
                'imageable_type' => Aporte::class
            ]);
        }
    }
}
 