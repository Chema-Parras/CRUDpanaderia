<?php

namespace App\Http\Controllers;

use App\Models\pan;
use Illuminate\Http\Request;

class PanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosPan['pan']=pan::paginate(5);

        return view('pan.indexPan'.$datosPan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pan.createPan');

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
        $datosPan = request()->except('_token');

        if($request->hasFile('Foto')){

            $datosPan['Foto']=$request->file('Foto')->store('uploads','public');
        }

        pan::insert($datosPan);



        return response()->json($datosPan);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function show(pan $pan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function edit(pan $pan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pan $pan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        pan::destroy($id);
        return redirect('pan');
    }
}
