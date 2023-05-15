<?php

namespace App\Http\Controllers;

use App\Models\Cantina;
use Illuminate\Http\Request;

class CantinaController extends Controller
{
    public function index() {
        $cantine= Cantina::all();
        return  view('cantine', compact('cantine'));
    }
}
