<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Disease\StoreDiseaseRequest;
use App\Http\Requests\Admin\Disease\UpdateDiseaseRequest;
use App\Repositories\DiseasesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class DiseaseController extends Controller
{
    private $repository;

    public function __construct(DiseasesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreDiseaseRequest $request)
    {
        DB::beginTransaction();
        try {
            $disease = $this->repository->store($request->all());
        } catch (\Exception $e) {
            return $this->cresponse('Error', $e->getMessage(), Response::HTTP_EXPECTATION_FAILED);
        }
        DB::commit();

        return $this->cresponse('Disease stored', $disease, Response::HTTP_CREATED);
    }

    public function update(UpdateDiseaseRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
