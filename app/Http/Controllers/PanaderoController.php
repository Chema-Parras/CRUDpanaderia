<?php

namespace App\Http\Controllers;

use App\Models\panadero;
use Illuminate\Http\Request;

class PanaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('panadero.indexPanadero');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panadero.createPanadero');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function show(panadero $panadero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function edit(panadero $panadero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, panadero $panadero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\panadero  $panadero
     * @return \Illuminate\Http\Response
     */
    public function destroy(panadero $panadero)
    {
        //
    }
}
