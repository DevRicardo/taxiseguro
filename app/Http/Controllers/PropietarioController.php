<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Propietario;
use App\User;
use DB;
use Validator;
use Auth;

class PropietarioController extends Controller
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
    	$propietario = array();
    	$propietario = Propietario::all();
    	        	    
	    return view("propietario.index")->with("propietarios", $propietario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("propietario.new"); 
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['cc' => 'required','nombres' => 'required','apellidos' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Registro corecto");

            $propietario = new Propietario();
            $propietario->cc = $request->cc;$propietario->nombres = $request->nombres;$propietario->apellidos = $request->apellidos;$propietario->direccion = $request->direccion;$propietario->telefono = $request->telefono;$propietario->email = $request->email;
            $propietario->save();
          
        
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
        $propietario = Propietario::find($id);
	    return view("propietario.show")->with("propietarios", $propietario);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $propietario = Propietario::find($id);
	    return view("propietario.edit")->with("propietarios", $propietario);
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

        
    	    $rules = ['cc' => 'required','nombres' => 'required','apellidos' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos")
                return redirect()->back()
                ->withInput()
                ->withErrors($validad->errors());
            }

            Flash::success("Actualización corecta");


	        $propietario = Propietario::find($id);
	        $propietario->cc = $request->cc;$propietario->nombres = $request->nombres;$propietario->apellidos = $request->apellidos;$propietario->direccion = $request->direccion;$propietario->telefono = $request->telefono;$propietario->email = $request->email;
            $propietario->save();
        
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

            $propietario = Propietario::find($id);
            $producto_id = $propietario->producto_id;
            $propietario->delete();
  

    	return redirect()->back();  
    }
}