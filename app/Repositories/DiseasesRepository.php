<?php


namespace App\Repositories;


use App\Models\Disease;
use App\Models\Media;
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

        Media::upload($this->disease, $data['icon'], 'icon');
        Media::upload($this->disease, $data['main_image'], 'main_image');

        $this->disease
            ->specialists()
            ->attach($data['specialists']);

        foreach ($data['previous_works'] as $previous_work) {
            $previousWorkInstance = $this->disease
                ->previousWorks()
                ->create([
                    'patient_name' => $previous_work['patient_name'],
                    'description' => $previous_work['description']
                ]);
            Media::upload($previousWorkInstance, $previous_work['image_after'], 'image_after');
            Media::upload($previousWorkInstance, $previous_work['image_before'], 'image_before');
        }

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
