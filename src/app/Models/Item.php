<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'explorador_id',
        'nome',
        'valor',
        'latitude',
        'longitude',
    ];

    public function explorador() {
        return $this->belongsTo(Explorer::class);
    }
}
