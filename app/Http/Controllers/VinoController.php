<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function index() {
        $vini = Vino::all();

        return view('vini', compact('vini'));

    }
}
