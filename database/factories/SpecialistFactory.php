<?php

namespace Database\Factories;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Specialist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'qualification_category' => $this->faker->jobTitle,
            'working_experience_time' => rand(1,10),
            'working_experience_description' => $this->faker->realText('10','4'),
            'education' => $this->faker->text,
            'courses' => $this->faker->text
        ];
    }
}
