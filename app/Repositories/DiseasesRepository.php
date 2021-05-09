<?php


namespace App\Repositories;


use App\Models\Disease;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class DiseasesRepository
{
    private $disease;

    public function __construct(Disease $disease)
    {
        $this->disease = $disease;
    }

    public function store($data)
    {
        $this->assignMainInfo($data);
        $this->disease->save();

        $iconPath = Storage::disk('public')->put('', $data['icon']);
        $mainImagePath = Storage::disk('public')->put('', $data['main_image']);

        $this->disease->storeMedia($iconPath, 'icon');
        $this->disease->storeMedia($mainImagePath, 'main_image');

        return $this->disease;
    }

    public function update($id, $data)
    {
        $this->disease = Disease::findOrFail($id);
        $this->assignMainInfo($data);
        $this->disease->save();

        return $this->disease;
    }

    private function assignMainInfo($data)
    {
        $this->disease->name = $data['name'];
        $this->disease->service_id = $data['service_id'];
        $this->disease->description = $data['description'];
        $this->disease->healing_process = Arr::get($data, 'healing_process', null);
    }
}
