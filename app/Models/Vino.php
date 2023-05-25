<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'annata', 'cantina_id', 'colore', 'tipologia', 'gradazione', 'estratto', 'acidita' ];

    public function cantina() {
        return $this->belongsTo(Cantina::class);
    }


    public function vitignos() {
        return $this->belongsToMany(Vitigno::class);
    }
}
