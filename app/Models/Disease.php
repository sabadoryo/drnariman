<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory, HasMedia;

    protected $fillable = [
        'name',
        'description',
        'healing_process'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function previousWorks()
    {
        return $this->hasMany(PreviousWork::class);
    }
}
