<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;
use App\Vehiculo;
use App\User;
use App\Conductor;
use DB;
use Validator;
use Auth;

class VehiculoController extends Controller
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
    	$vehiculo = array();
    	$vehiculo = Vehiculo::all();
    	        	    
	    return view("vehiculo.index")->with("vehiculos", $vehiculo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conductores = Conductor::all();
        return view("vehiculo.new")->with("conductores", $conductores);
    }
	
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //dd($request->all());
    	    $rules = ['placa' => 'required','movil' => 'required','marca' => 'required','modelo' => 'required','soat' => 'required','vigenciasoat' => 'required','tecnomecanica' => 'required','vigenciatm' => 'required','seguroct' => 'required','vigenciact' => 'required','seguroect' => 'required','vigenciaect' => 'required','toperacion_id' => 'required',];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos");
                return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
            }
            try{

                DB::beginTransaction();
                $vehiculo = new Vehiculo();
                $vehiculo->placa = $request->placa;$vehiculo->movil = $request->movil;$vehiculo->marca = $request->marca;$vehiculo->modelo = $request->modelo;$vehiculo->soat = $request->soat;$vehiculo->vigenciasoat = $request->vigenciasoat;$vehiculo->tecnomecanica = $request->tecnomecanica;$vehiculo->vigenciatm = $request->vigenciatm;$vehiculo->seguroct = $request->seguroct;$vehiculo->vigenciact = $request->vigenciact;$vehiculo->seguroect = $request->seguroect;$vehiculo->vigenciaect = $request->vigenciaect;$vehiculo->toperacion_id = $request->toperacion_id;
                $vehiculo->save();
                $id_vehiculo = $vehiculo->id;
                $conductor_id = $request->conductor_id;
                foreach($conductor_id as $value) {
                    $vehiculo->conductores()->attach($value, ['estado' => 1]);
                }
                DB::commit();

            }catch (\Exception $e){

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
        $vehiculo = Vehiculo::find($id);
	    return view("vehiculo.show")->with("vehiculo", $vehiculo);
    }
		
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
	    $vehiculo = Vehiculo::find($id);
	    return view("vehiculo.edit")->with("vehiculo", $vehiculo);
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

        
    	    $rules = ['placa' => 'required','movil' => 'required','marca' => 'required','modelo' => 'required','soat' => 'required','vigenciasoat' => 'required','tecnomecanica' => 'required','vigenciatm' => 'required','seguroct' => 'required','vigenciact' => 'required','seguroect' => 'required','vigenciaect' => 'required'];
            $validar = Validator::make($request->all(), $rules);

            if($validar->fails()){
            	Flash::error("Error en la validación de datos");
                return redirect()->back()
                ->withInput()
                ->withErrors($validar->errors());
            }

            Flash::success("Actualización corecta");


	        $vehiculo = Vehiculo::find($id);
	        $vehiculo->placa = $request->placa;$vehiculo->movil = $request->movil;$vehiculo->marca = $request->marca;$vehiculo->modelo = $request->modelo;$vehiculo->soat = $request->soat;$vehiculo->vigenciasoat = $request->vigenciasoat;$vehiculo->tecnomecanica = $request->tecnomecanica;$vehiculo->vigenciatm = $request->vigenciatm;$vehiculo->seguroct = $request->seguroct;$vehiculo->vigenciact = $request->vigenciact;$vehiculo->seguroect = $request->seguroect;$vehiculo->vigenciaect = $request->vigenciaect;$vehiculo->toperacion_id = $request->toperacion_id;
            $vehiculo->save();
        
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

            $vehiculo = Vehiculo::find($id);
            $producto_id = $vehiculo->producto_id;
            $vehiculo->delete();
  

    	return redirect()->back();  
    }
}