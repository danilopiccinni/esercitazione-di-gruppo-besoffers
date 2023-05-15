<?php

namespace App\Http\Controllers;

use App\Models\Vitigno;
use Illuminate\Http\Request;

class VitignoController extends Controller
{
    public function index() {
        $vitigni = Vitigno::all();

        return view('vitigni' , compact('vitigni'));
    }
}
