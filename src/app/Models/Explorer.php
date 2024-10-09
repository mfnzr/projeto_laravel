<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class Explorer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'idade',
        'latitude',
        'longitude',
        'inventario'
    ];

    public function item() {
        return $this->belongsTo(Item::class);
    }
}
