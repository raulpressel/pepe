<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\DatosPersona;
use Illuminate\Http\Request;
use App\Beca;
use App\User;

use DB;

use Carbon\Carbon;

use  Illuminate\Database\Eloquent\Model;


class DatosPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $datos = DatosPersona::with(['user_name', 'user_id'])->get();

        
        return view('datospersona.index', compact('datos')) ;

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos = DatosPersona::with(['user_name', 'user_id'])->get();
        $users = User::with(['id', 'name'])->get();
        
        return view ('datospersona.create', compact('datos', 'users'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Input::all();
        
          /*  $datos = DatosPersona::create($request->all());

            if (auth()->check()) {
                auth()->user()->messages()->save($datos);
            }

            event(new MessageWasReceived($datos));

        //esta forma sirve cuando sabemos que siempre tenemos un usario autenticado
        //auth()->user()->messages()->create($request->all());

        return redirect()->route('datospersona.create')->with('info', 'Hemos recibido tu mensaje'); 
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function show(DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosPersona $datosPersona)
    {
        return view('datospersona.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosPersona $datosPersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosPersona  $datosPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosPersona $datosPersona)
    {
        //
    }
}
