<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
    ];

    public function places()
    {
        return $this->belongsToMany(Place::class, 'place_facility');
    }
}