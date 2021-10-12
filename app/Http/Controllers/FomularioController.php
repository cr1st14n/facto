<?php

namespace App\Http\Controllers;

use App\Models\fomulario;
use Illuminate\Http\Request;

class FomularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $new = new fomulario();
        $new->f1 = $request->input('1');
        $new->f2 = $request->input('2');
        $new->f3 = $request->input('3');
        $new->f4 = $request->input('4');
        $new->f5 = $request->input('5');
        $new->f6 = $request->input('6');
        $new->f7 = $request->input('7');
        $new->f8 = $request->input('8');
        $new->f9 = $request->input('9');
        $new->f10 = $request->input('10');

        $res = $new->save();
        return $res;
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
     * @param  \App\Models\fomulario  $fomulario
     * @return \Illuminate\Http\Response
     */
    public function show(fomulario $fomulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fomulario  $fomulario
     * @return \Illuminate\Http\Response
     */
    public function edit(fomulario $fomulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fomulario  $fomulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fomulario $fomulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fomulario  $fomulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(fomulario $fomulario)
    {
        //
    }
}
