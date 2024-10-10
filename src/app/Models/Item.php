<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'nome',
        'valor',
        'latitude',
        'longitude',
        'explorador_id',
    ];

    public function explorer() {
        return $this->belongsTo(Explorer::class);
    }
}
