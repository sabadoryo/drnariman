<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ServiceController extends Controller
{
    public function index()
    {
        $services = QueryBuilder::for(Service::class)
            ->allowedFilters(
                AllowedFilter::exact('id'),
                AllowedFilter::exact('name')
            )
            ->get();

        return $this->cresponse('All services', $services);
    }

    public function show($id)
    {
        //
    }
}
