<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $appends = [
        'url'
    ];

    protected $fillable = [
        'path',
        'name'
    ];


    public function getUrlAttribute()
    {
        return $this->path ? Storage::disk('public')->url($this->path) : null;
    }
}
