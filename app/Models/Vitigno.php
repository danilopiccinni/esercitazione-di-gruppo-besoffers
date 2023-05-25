<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitigno extends Model
{
    use HasFactory;

    public function vinos() {
        return $this->belongsToMany(Vino::class);
    }
}
