<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cantina;
use Illuminate\Http\Request;

class CantinaController extends Controller
{
    public function index() {
        $cantinas = Cantina::with('vinos')->get();

        return response()->json([
            'success' => true,
            'results' => $cantinas,
        ]);
    }

    public function show($id) {

        $cantina = Cantina::where('id', $id)->with('vinos')->first();

        if($cantina) {
            return response()->json([
                'success' => true,
                'results' => $cantina,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'nessun cantina trovato'
            ]);
        }
    }
}
