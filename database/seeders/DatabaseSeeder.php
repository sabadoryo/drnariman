<?php

namespace Database\Seeders;

use App\Models\PhotoGallery;
use App\Models\PreviousWork;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ServicesSeeder::class,
            DiseaseSeeder::class,
            SpecialistsSeeder::class,
            SettingsSeeder::class,
            PhotoGallerySeeder::class,
            PreviousWorksSeeder::class,
        ]);
    }
}
