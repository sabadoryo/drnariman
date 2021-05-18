<?php

namespace App\Http\Controllers;

use App\Models\PreviousWork;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class PreviousWorkController extends Controller
{
    public function index()
    {
        $works = QueryBuilder::for(PreviousWork::class)
            ->allowedIncludes('media','disease.media')
            ->get();

        return $this->cresponse('All previous works', $works);
    }
}
