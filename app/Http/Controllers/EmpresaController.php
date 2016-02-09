<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\User;
use DB;
use Validator;
use Auth;

class EmpresaController extends Controller
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
    	$empresa = array();
    	$empresa = Empresa::all();
    	        	    
	    return view("empresa.index")->with("empresas", $empresa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("empresa.new"); 
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['nit' => 'required','nombre' => 'required','rlegal' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Registro corecto");

            $empresa = new Empresa();
            $empresa->nit = $request->nit;$empresa->nombre = $request->nombre;$empresa->rlegal = $request->rlegal;
            $empresa->save();
          
        
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
        $empresa = Empresa::find($id);
	    return view("empresa.show")->with("empresas", $empresa);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $empresa = Empresa::find($id);
	    return view("empresa.edit")->with("empresas", $empresa);
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

        
    	    $rules = ['nit' => 'required','nombre' => 'required','rlegal' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Actualización corecta");


	        $empresa = Empresa::find($id);
	        $empresa->nit = $request->nit;$empresa->nombre = $request->nombre;$empresa->rlegal = $request->rlegal;
            $empresa->save();
        
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

            $empresa = Empresa::find($id);
            $producto_id = $empresa->producto_id;
            $empresa->delete();
  

    	return redirect()->back();  
    }
}