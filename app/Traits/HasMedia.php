<?php


namespace App\Traits;


use App\Models\Media;

trait HasMedia
{
    public function media()
    {
        return $this->morphMany(Media::class,'mediable');
    }

    public function storeMedia($path, $destiny)
    {
        $this->media()->create([
            'path' => $path,
            'destiny' => $destiny
        ]);
    }
}
