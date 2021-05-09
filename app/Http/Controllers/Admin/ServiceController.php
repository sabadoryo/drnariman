<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Models\Service;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends Controller
{
    private $repository;

    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreServiceRequest $request)
    {
        DB::beginTransaction();
        try {
            $service = $this->repository->store($request->validated());
        } catch (\Exception $exception) {
            return $this->cresponse('Error', $exception->getMessage(), Response::HTTP_EXPECTATION_FAILED);
        }
        DB::commit();

        return $this->cresponse('Service stored', $service);
    }

    public function update(Request $request, $serviceId)
    {
        DB::beginTransaction();
        try {
            $service = $this->repository->update($serviceId, $request);
        } catch (\Exception $exception) {
            return $this->cresponse('Error', $exception->getMessage(), Response::HTTP_FAILED_DEPENDENCY);
        }
        DB::commit();

        return $this->cresponse('Service updated', $service);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return $this->cresponse('Service deleted');
    }
}
