<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = QueryBuilder::for(Specialist::class)
            ->allowedFilters(
                AllowedFilter::exact('id'),
                AllowedFilter::partial('full_name')
            )
            ->allowedIncludes('media')
            ->get();

        return $this->cresponse('All specialists', $specialists);
    }
}
