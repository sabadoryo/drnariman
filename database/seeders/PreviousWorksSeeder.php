<?php

namespace Database\Seeders;

use App\Models\PreviousWork;
use Illuminate\Database\Seeder;

class PreviousWorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PreviousWork::factory(10)->make()->each(function ($pw) {
            $pw->save();

            $pw->media()
                ->create([
                    'path' => '/media/previous-works/sample_before.png',
                    'destiny' => 'image_before'
                ]);

            $pw->media()
                ->create([
                    'path' => '/media/previous-works/sample_after.png',
                    'destiny' => 'image_after'
                ]);
        });
    }
}
