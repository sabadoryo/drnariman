<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function mediable()
    {
        return $this->morphTo();
    }
}
