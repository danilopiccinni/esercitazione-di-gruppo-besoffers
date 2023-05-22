<?php

namespace App\Http\Controllers;

use App\Models\Cantina;
use App\Models\Vino;
use Illuminate\Http\Request;

class CantinaController extends Controller
{
    public function index() {
        $cantine= Cantina::all();
        return  view('cantine', compact('cantine'));
    }

    public function filter(Request $request) {
        $searchTerm = $request['search'];
        $cantine= Cantina::where(function ($query) use ($searchTerm) {
        $query->where('nome', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('indirizzo', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('comune', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('provincia', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('regione', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('nazione', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('telefono', 'LIKE', '%' . $searchTerm . '%') 
            ->orWhere('email', 'LIKE', '%' . $searchTerm . '%');
    })->get();
        // $cantine= Cantina::where('nome', 'LIKE','%'. $request['search']. '%' )->get();
        return  view('cantine', compact('cantine'));
    }
}
