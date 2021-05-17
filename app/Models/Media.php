<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediable_id',
        'mediable_type',
        'path',
        'destiny'
    ];

    protected $hidden = [
        'mediable_id',
        'mediable_type',
        'updated_at',
        'created_at'
    ];

    protected $appends = [
        'url'
    ];

    public function mediable()
    {
        return $this->morphTo();
    }

    public static function upload(Model $model, $newFile, $destiny)
    {
        $file = $model->media()
            ->where('destiny', $destiny)
            ->first();

        $newPath = Storage::disk('public')->put('/media/', $newFile);

        if ($file) {
            if (Storage::disk('public')->exists($file->path)) {
                Storage::disk('public')->delete($file->path);
            }
            $file->path = $newPath;
            $file->save();
        } else {
            $file = $model->media()
                ->create([
                    'path' => $newPath,
                    'destiny' => $destiny
                ]);
        }

        return $file;
    }

    public function getUrlAttribute()
    {
        return Storage::disk('public')->url($this->path);
    }
}
