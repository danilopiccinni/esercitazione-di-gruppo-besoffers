<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vino;
use App\Models\Vitigno;
use Illuminate\Http\Request;

class VitignoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitignos = Vitigno::all();

        return view('admin.vitignos.index', compact('vitignos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vinos = Vino::all();

        return view('admin.vitignos.create', compact('vinos'));
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

        $newVitigno = new Vitigno();

        $newVitigno->fill($formData);

        $newVitigno->save();

        return redirect()->route('admin.vitignos.show', $newVitigno);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vitigno $vitigno)
    {
        return view('admin.vitignos.show' , compact('vitigno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitigno $vitigno)
    {
        return view('admin.vitignos.edit', compact('vitigno'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vitigno $vitigno)
    {
        $formData = $request->all();

        $vitigno->update($formData);

        return redirect()->route('admin.vitignos.show', $vitigno);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitigno $vitigno)
    {
        $vitigno->delete();

        return redirect()->route('admin.vitignos.index');
    }
}
