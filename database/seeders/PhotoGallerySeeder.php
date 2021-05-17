<?php

namespace Database\Seeders;

use App\Models\PhotoGallery;
use Illuminate\Database\Seeder;

class PhotoGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhotoGallery::factory()->count(3)->create();
    }
}
