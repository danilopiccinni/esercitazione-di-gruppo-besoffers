<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantina extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'indirizzo', 'comune', 'provincia', 'regione', 'nazione','telefono','email'];

    public function vinos() {
        return $this->hasMany(Vino::class);
    } 
}
