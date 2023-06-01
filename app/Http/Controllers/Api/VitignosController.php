<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vitigno;
use Illuminate\Http\Request;

class VitignosController extends Controller
{
    public function index() {
        $vitignos = Vitigno::with('vinos')->get();

        return response()->json([
            'success' => true,
            'results' => $vitignos,
        ]);
    }

    public function show($id) {

        $vitigno = Vitigno::where('id', $id)->with('vinos')->first();

        if($vitigno) {
            return response()->json([
                'success' => true,
                'results' => $vitigno,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'nessun vitigno trovato'
            ]);
        }
    }
}
