<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Toperacione;
use App\User;
use DB;
use Validator;
use Auth;

class ToperacioneController extends Controller
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
    	$toperacione = array();
    	$toperacione = Toperacione::all();
    	        	    
	    return view("toperacione.index")->with("toperaciones", $toperacione);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("toperacione.new"); 
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['numerotageta' => 'required','vigenciatargeta' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Registro corecto");

            $toperacione = new Toperacione();
            $toperacione->numerotageta = $request->numerotageta;$toperacione->vigenciatargeta = $request->vigenciatargeta;
            $toperacione->save();
          
        
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
        $toperacione = Toperacione::find($id);
	    return view("toperacione.show")->with("toperaciones", $toperacione);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $toperacione = Toperacione::find($id);
	    return view("toperacione.edit")->with("toperaciones", $toperacione);
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

        
    	    $rules = ['numerotageta' => 'required','vigenciatargeta' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Actualización corecta");


	        $toperacione = Toperacione::find($id);
	        $toperacione->numerotageta = $request->numerotageta;$toperacione->vigenciatargeta = $request->vigenciatargeta;
            $toperacione->save();
        
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

            $toperacione = Toperacione::find($id);
            $producto_id = $toperacione->producto_id;
            $toperacione->delete();
  

    	return redirect()->back();  
    }
}