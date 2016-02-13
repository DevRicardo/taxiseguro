<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Conductor;
use App\Vehiculo;
use App\User;
use DB;
use Validator;
use Auth;

class ConductorController extends Controller
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

    	$conductor = Conductor::all();

    	        	    
	    return view("conductor.index")
            ->with("conductores", $conductor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculos = Vehiculo::all();

       return view("conductor.new")
           ->with('vehiculos',$vehiculos);
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	    $rules = ['cc' => 'required','nombres' => 'required','apellidos' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required','categoria' => 'required','vigencia' => 'required','eps' => 'required','arl' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos");
                return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
            }

            try{
                DB::beginTransaction();
                    $conductor = new Conductor();
                    $conductor->cc = $request->cc;
                    $conductor->nombres = $request->nombres;
                    $conductor->apellidos = $request->apellidos;
                    $conductor->direccion = $request->direccion;
                    $conductor->telefono = $request->telefono;
                    $conductor->email = $request->email;
                    $conductor->categoria = $request->categoria;
                    $conductor->vigencia = $request->vigencia;
                    $conductor->eps = $request->eps;
                    $conductor->arl = $request->arl;
                    $conductor->save();

                    $vehiculo_id = $request->vehiculo_id;

                    foreach($vehiculo_id as $value) {
                        $conductor->vehiculos()->attach($value, ['estado' => 1]);
                    }


                DB::commit();

            }catch (\Exception $e){
                dd($e);
                DB::rollBack();
            }

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
        $vehiculos = Vehiculo::all();
        $conductore = Conductor::find($id);
	    return view("conductor.show")
            ->with("conductore", $conductore)
            ->with("vehiculos",$vehiculos);
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
        $vehiculos = Vehiculo::all();
	    $conductore = Conductor::find($id);
	    return view("conductor.edit")
            ->with("conductore", $conductore)
            ->with('vehiculos',$vehiculos);
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

        
    	    $rules = ['cc' => 'required','nombres' => 'required','apellidos' => 'required','direccion' => 'required','telefono' => 'required','email' => 'required','categoria' => 'required','vigencia' => 'required','eps' => 'required','arl' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos");
                return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
            }

            Flash::success("Actualización corecta");

            try{
                DB::beginTransaction();

                $conductore = Conductor::find($id);
                $conductore->cc = $request->cc;$conductore->nombres = $request->nombres;$conductore->apellidos = $request->apellidos;$conductore->direccion = $request->direccion;$conductore->telefono = $request->telefono;$conductore->email = $request->email;$conductore->categoria = $request->categoria;$conductore->vigencia = $request->vigencia;$conductore->eps = $request->eps;$conductore->arl = $request->arl;
                $conductore->save();
                DB::table('conductor_vehiculo')->where('conductor_id',$id)->delete();
                $vehiculo_id = $request->vehiculo_id;
                foreach($vehiculo_id as $value) {
                    $conductore->vehiculos()->attach($value, ['estado' => 1]);
                }
                DB::commit();
            }catch (\Exception $e){
                dd($e);
                DB::rollBack();
            }



        
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

            $conductore = Conductor::find($id);
            $producto_id = $conductore->producto_id;
            $conductore->delete();
  

    	return redirect()->back();  
    }
}