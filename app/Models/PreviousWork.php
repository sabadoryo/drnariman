<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousWork extends Model
{
    use HasFactory, HasMedia;

    protected $fillable = [
        'patient_name',
        'description'
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
