<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iten extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'latitude',
        'longitude',
    ];
}
