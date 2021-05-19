<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = QueryBuilder::for(Disease::class)
            ->allowedFilters(
                AllowedFilter::exact('name')
            )
            ->allowedSorts('id', 'name', 'description','created_at', 'updated_at')
            ->allowedIncludes('media','specialists.media', 'previousWorks.media', 'service')
            ->allowedAppends('icon')
            ->get();

        return $this->cresponse('All diseases', $diseases);
    }
}
