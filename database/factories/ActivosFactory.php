<?php

namespace Database\Factories;

use App\Models\Activos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ActivosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NombreLinea' => $this->faker->name(),
            'LongitudLinea' => $this->faker->randomDigit(2),
            'DiametroLinea' => $this->faker->randomDigit(2),
            'FechaInstalacion' => date('Y-m-d'),
        ];
    }
}
