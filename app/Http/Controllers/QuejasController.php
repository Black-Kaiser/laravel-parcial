<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queja;

class QuejasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quejas=Queja::all();
        return view('queja.index')->with('quejas',$quejas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('queja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quejas = new Queja();
        $quejas->nombre_cliente = $request->get('nombre_cliente');
        $quejas->email_cliente = $request->get('email_cliente');
        $quejas->email_admin = $request->get('email_admin');
        $quejas->descripcion = $request->get('descripcion');
        $quejas->tipo_servicio = $request->get('tipo_servicio');

        $quejas->save();
        return redirect('/quejas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $queja=Queja::find($id);
        return view('queja.edit')->with('queja', $queja);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $queja=Queja::find($id);
       // $queja->nombre_cliente = $request->get('nombre_cliente');
       // $queja->email_cliente = $request->get('email_cliente');
      //  $queja->email_admin = $request->get('email_admin');
        $queja->descripcion = $request->get('descripcion');
       // $queja->tipo_servicio = $request->get('tipo_servicio');

        $queja->save();
        return redirect('/quejas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $queja=Queja::find($id);
        $queja->delete();
        return redirect('/quejas'); 
    }
}
