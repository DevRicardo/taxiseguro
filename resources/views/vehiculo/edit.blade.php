@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/vehiculo') !!}">Vehiculo</a></li>
    <li><a href="#">Editar</a></li>
</ul>
<!-- END BREADCRUMB -->
{!! Form::open(array("url" => "vehiculo/".$vehiculo->id, "method" => "PUT", "class"=>"form-horizontal")) !!}
@include("flash::message")
    <div class="panel panel-warning">
        <div class="panel-heading">

            <h3 class="panel-title"><strong>Editar vehiculo</strong></h3>
        </div>
        <div class="panel-body">

						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="placa">Placa</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="placa" id="placa" class="form-control" value="{!!  $vehiculo->placa  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="movil">Movil</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="movil" id="movil" class="form-control" value="{!!  $vehiculo->movil  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="marca">Marca</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="marca" id="marca" class="form-control" value="{!!  $vehiculo->marca  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="modelo">Modelo</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="modelo" id="modelo" class="form-control" value="{!!  $vehiculo->modelo  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="soat">Soat</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="soat" id="soat" class="form-control" value="{!!  $vehiculo->soat  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciasoat">Vigenciasoat</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciasoat" id="vigenciasoat" class="form-control" value="{!!  $vehiculo->vigenciasoat  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="tecnomecanica">Tecnomecanica</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="tecnomecanica" id="tecnomecanica" class="form-control" value="{!!  $vehiculo->tecnomecanica  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatm">Vigenciatm</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatm" id="vigenciatm" class="form-control" value="{!!  $vehiculo->vigenciatm  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="seguroct">Seguroct</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="seguroct" id="seguroct" class="form-control" value="{!!  $vehiculo->seguroct  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciact">Vigenciact</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciact" id="vigenciact" class="form-control" value="{!!  $vehiculo->vigenciact  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="seguroect">Seguroect</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="seguroect" id="seguroect" class="form-control" value="{!!  $vehiculo->seguroect  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciaect">Vigenciaect</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciaect" id="vigenciaect" class="form-control" value="{!!  $vehiculo->vigenciaect  !!}" />
	                            </div>
	                        </div>


        </div>
        <div class="panel-footer">
            <a href="/vehiculo" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection