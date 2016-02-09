<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aseguradora;
use App\User;
use DB;
use Validator;
use Auth;

class AseguradoraController extends Controller
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
    	$aseguradora = array();
    	$aseguradora = Aseguradora::all();
    	        	    
	    return view("aseguradora.index")->with("aseguradoras", $aseguradora);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("aseguradora.new"); 
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['nombre' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Registro corecto");

            $aseguradora = new Aseguradora();
            $aseguradora->nombre = $request->nombre;
            $aseguradora->save();
          
        
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
        $aseguradora = Aseguradora::find($id);
	    return view("aseguradora.show")->with("aseguradoras", $aseguradora);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $aseguradora = Aseguradora::find($id);
	    return view("aseguradora.edit")->with("aseguradoras", $aseguradora);
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

        
    	    $rules = ['nombre' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Actualización corecta");


	        $aseguradora = Aseguradora::find($id);
	        $aseguradora->nombre = $request->nombre;
            $aseguradora->save();
        
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

            $aseguradora = Aseguradora::find($id);
            $producto_id = $aseguradora->producto_id;
            $aseguradora->delete();
  

    	return redirect()->back();  
    }
}