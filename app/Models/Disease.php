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
}
