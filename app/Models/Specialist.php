<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory, HasMedia;

    protected $casts = [
      'working_experience_description' => 'array',
      'education' => 'array',
      'courses' => 'array'
    ];

}
