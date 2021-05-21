<?php

namespace Database\Seeders;


use App\Models\Categoria;

use Illuminate\Database\Seeder;




use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        Storage::deleteDirectory('eventos');

        Storage::makeDirectory('eventos');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        
        Categoria::factory(4)->create();
        
        $this->call(EventoSeeder::class);

        $this->call(AporteSeeder::class);

        $this->call(ObjetoSeeder::class);

    }
}
