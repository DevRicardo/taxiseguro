<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Targetacontro;
use App\User;
use DB;
use Validator;
use Auth;

class TargetacontroController extends Controller
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
    	$targetacontro = array();
    	$targetacontro = Targetacontro::all();
    	        	    
	    return view("targetacontro.index")->with("targetacontrol", $targetacontro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("targetacontro.new"); 
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['numero' => 'required','vigenciatc' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Registro corecto");

            $targetacontro = new Targetacontro();
            $targetacontro->numero = $request->numero;$targetacontro->vigenciatc = $request->vigenciatc;
            $targetacontro->save();
          
        
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
        $targetacontro = Targetacontro::find($id);
	    return view("targetacontro.show")->with("targetacontrol", $targetacontro);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $targetacontro = Targetacontro::find($id);
	    return view("targetacontro.edit")->with("targetacontrol", $targetacontro);
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

        
    	    $rules = ['numero' => 'required','vigenciatc' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Actualización corecta");


	        $targetacontro = Targetacontro::find($id);
	        $targetacontro->numero = $request->numero;$targetacontro->vigenciatc = $request->vigenciatc;
            $targetacontro->save();
        
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

            $targetacontro = Targetacontro::find($id);
            $producto_id = $targetacontro->producto_id;
            $targetacontro->delete();
  

    	return redirect()->back();  
    }
}