<?php

namespace Database\Seeders;

use App\Models\Disease;
use App\Models\Specialist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SpecialistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Specialist::factory(10)->make()->each(function (Specialist $specialist) {
            $specialist->save();

            $specialist->storeMedia('/media/specialists/sample.png', 'main_image');

            $n = rand(1, 27);

            $disease = Disease::find($n);

            $disease->specialists()
                ->attach($specialist);
        });
    }
}
