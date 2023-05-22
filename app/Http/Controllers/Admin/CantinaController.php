<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cantina;
use Illuminate\Http\Request;

class CantinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cantine = Cantina::all();

        return view('admin.cantine.index', compact('cantine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cantine.create');
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

        $newCantina = new Cantina();

        $newCantina->fill($formData);

        $newCantina->save();

        return redirect()->route('admin.cantina.show' , $newCantina);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cantina $cantina)
    {
        return view('admin.cantine.show', compact('cantina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cantina $cantina)
    {
        return view('admin.cantine.edit',compact('cantina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cantina $cantina)
    {
        $formData = $request->all();

        $cantina->update($formData);

        return redirect()->route('admin.cantina.show', $cantina);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cantina $cantina)
    {
        $cantina->delete();

        return redirect()->route('admin.cantina.index');
    }
}
