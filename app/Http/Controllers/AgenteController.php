<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;
use App\Agente;
use App\User;
use DB;
use Validator;
use Auth;

class AgenteController extends Controller
{
    private $_usuario_id;

    public function __construct(){
        $this->_usuario_id = Auth::user()->id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agentes = Agente::all();

        return view("agente.index")->with("agentes", $agentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("agente.new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'cc'             =>'required',
            'nombre_completo'=>'required',
            'cel'            =>'required'
        ];
        $validar = Validator::make($request->all(), $rules);

        if($validar->fails()){
            Flash::error("Error en la validación de datos");
            return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
        }

        $agente = new Agente();
        $agente->cc = $request->cc;
        $agente->nombre_completo = $request->nombre_completo;
        $agente->cel = $request->cel;
        $agente->password = md5($request->cc);
        $agente->save();

        Flash::success("Registro corecto");

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $agente = Agente::find($id);
       return view("agente.edit")->with("agente",$agente);
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

        $rules = [
            'cc'             =>'required',
            'nombre_completo'=>'required',
            'cel'            =>'required'
        ];
        $validar = Validator::make($request->all(), $rules);

        if($validar->fails()){
            Flash::error("Error en la validación de datos");
            return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
        }

        $agente = Agente::find($id);
        $agente->cc = $request->cc;
        $agente->nombre_completo = $request->nombre_completo;
        $agente->cel = $request->cel;
        if(isset($request->reset)){
            $agente->password = md5($request->cc);
        }

        $agente->save();

        Flash::success("Actualización corecta");

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agente = Agente::find($id);
        $agente->delete();

        return redirect()->back();


    }
}