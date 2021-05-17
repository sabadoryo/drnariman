<?php

namespace Database\Factories;

use App\Models\PhotoGallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoGalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhotoGallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => '/photo-gallery/sample.png',
            'name' => $this->faker->randomElement(['Кабинет стоматологии', 'Кабинет хирургии', 'Столовая'])
        ];
    }
}
