<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = QueryBuilder::for(Specialist::class)
            ->allowedIncludes('media')
            ->get();

        return $this->cresponse('All specialists', $specialists);
    }
}
