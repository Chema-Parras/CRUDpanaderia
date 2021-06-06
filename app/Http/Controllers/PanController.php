<?php

namespace App\Http\Controllers;

use App\Models\pan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $datosPan['pans']=pan::paginate(5);

        return view('pan.indexPan',$datosPan);
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

        Pan::insert($datosPan);

        

        //return response()->json($datosPan);
        return redirect('pan')->with('mensaje','Panesito agregado con éxito.');
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
    public function edit($id_Pan)
    {
        //
        $pan=pan::findOrFail($id_Pan);
        return view('pan.editPan',compact('pan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pan  $pan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Pan)
    {
        //
        $datosPan = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){

            $datosPan['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Pan::where('id_Pan','=',$id_Pan)->update($datosPan);

        $pan=Pan::findOrFail($id_Pan);
        return view('pan.editPan', compact('pan'));
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
        $pan=Pan::findOrFail($id);

        if(Storage::delete('public/'.$pan->Foto)){
            Pan::destroy($id);
        }

        
        return redirect('pan')->with('mensaje','Panesito borrado, hehe.');
    }
}
