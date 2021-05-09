<?php


namespace App\Repositories;


use App\Models\Service;
use Illuminate\Support\Facades\App;

class ServiceRepository
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function store($data)
    {
        $this->service->name = $data['name'];
        $this->service->save();

        return $this->service;
    }

    public function update($serviceId, $data)
    {
        $service = Service::findOrFail($serviceId);

        $service->name = $data['name'];
        $service->save();

        return $service;
    }
}
