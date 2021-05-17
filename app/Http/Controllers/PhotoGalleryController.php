<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $photos = QueryBuilder::for(PhotoGallery::class)
            ->get();

        return $this->cresponse('All photos', $photos);
    }
}
