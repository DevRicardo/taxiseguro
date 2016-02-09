<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use DB;
use Validator;
use Auth;

class RoleController extends Controller
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
    	$role = array();
    	$role = Role::all();
    	        	    
	    return view("role.index")->with("roles", $role);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("role.new"); 
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

            $role = new Role();
            $role->nombre = $request->nombre;
            $role->save();
          
        
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
        $role = Role::find($id);
	    return view("role.show")->with("roles", $role);   
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $role = Role::find($id);
	    return view("role.edit")->with("roles", $role);
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


	        $role = Role::find($id);
	        $role->nombre = $request->nombre;
            $role->save();
        
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

            $role = Role::find($id);
            $producto_id = $role->producto_id;
            $role->delete();
  

    	return redirect()->back();  
    }
}