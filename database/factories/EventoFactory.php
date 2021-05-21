<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(14);
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            
            'body' => $this->faker->text(1000),

            'user_id' => User::all()->random()->id,
            'categoria_id' => Categoria::all()->random()->id
        ];
    }
}
