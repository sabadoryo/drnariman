<?php

namespace Database\Factories;

use App\Models\PreviousWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreviousWorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PreviousWork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_name' => $this->faker->name,
            'description' => $this->faker->text('5'),
            'disease_id' => rand(1, 27),
        ];
    }
}
