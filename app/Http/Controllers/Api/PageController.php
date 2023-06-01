<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vino;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $vinos = Vino::with('cantina' , 'vitignos')->get();

        return response()->json([
            'success' => true,
            'results' => $vinos,
        ]);
    }

    public function show($id) {

        $vino = Vino::where('id', $id)->with('cantina', 'vitignos')->first();

        if($vino) {
            return response()->json([
                'success' => true,
                'results' => $vino,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'nessun progetto trovato'
            ]);
        }
    }
}
