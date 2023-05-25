<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cantina;
use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinos = Vino::all();

        return view('admin.vinos.index', compact('vinos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantinas = Cantina::all();
        return view('admin.vinos.create', compact('cantinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newVino = new Vino();

        $newVino->fill($formData);

        $newVino->save();

        return redirect()->route('admin.vino.show' , $newVino);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vino $vino)
    {
        return view('admin.vinos.show', compact('vino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vino $vino)
    {
        $cantinas = Cantina::all();

        return view('admin.vinos.edit',compact('vino', 'cantinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vino $vino)
    {
        $formData = $request->all();

        $vino->update($formData);

        return redirect()->route('admin.vino.show', $vino);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vino $vino)
    {
        $vino->delete();

        return redirect()->route('admin.vino.index');
    }
}
