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
            'education' => ($this->faker->randomElements(['АГМИ, Интернатура, Общая хирургия (2006-2007)','КазНМУ имени Асфендиярова (2000-2006)'], 2)),
            'working_experience_description' => ($this->faker->randomElements(['2012-2017гг. SEMА Hospital', '2012г. Лечебно-диагностический центр','2011-2012гг. Клиника Достар Мед','2011г. Клиника ЖАН','2007-2011гг. Центральная Районна Больница г. Талгар, врач хирург отделения экстренной хирургии'],1)),
            'courses' => ($this->faker->randomElements(['Эндоскопия в хирургии (2018)','Воспалительные заболевания толстого кишечника (2018)','Фиброгастродуоденоскоприя (2012)','Общая хирургия (2011)'],2))
        ];
    }
}
