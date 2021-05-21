<?php

namespace Database\Factories;

use App\Models\Objeto;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ObjetoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objeto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigoap' => $this->faker->word(10),
            'descripcion' => $this->faker->word(20),
            'status' => $this->faker->randomElement([1, 2, 3]),
            'lista_detalle' => $this->faker->text('1000'),
            'evento_id' => Evento::all()->random()->id,
            'user_id' => User::all()->random()->id

        ];
    }
}
