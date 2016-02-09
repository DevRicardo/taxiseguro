@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/vehiculo') !!}">Vehiculo</a></li>
    <li><a href="#">Detalle</a></li>
</ul>
<!-- END BREADCRUMB -->
<form class="form-horizontal">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Detalle vehiculo</strong></h3>
        </div>
        <div class="panel-body">
            

						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="placa">Placa</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="placa" id="placa" class="form-control" value="{!!  $vehiculo->placa  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="movil">Movil</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="movil" id="movil" class="form-control" value="{!!  $vehiculo->movil  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="marca">Marca</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="marca" id="marca" class="form-control" value="{!!  $vehiculo->marca  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="modelo">Modelo</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="modelo" id="modelo" class="form-control" value="{!!  $vehiculo->modelo  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="soat">Soat</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="soat" id="soat" class="form-control" value="{!!  $vehiculo->soat  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciasoat">Vigencia soat</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciasoat" id="vigenciasoat" class="form-control" value="{!!  $vehiculo->vigenciasoat  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="tecnomecanica">Tecnomecanica</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="tecnomecanica" id="tecnomecanica" class="form-control" value="{!!  $vehiculo->tecnomecanica  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatm">Vigencia Tecnomecanic</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatm" id="vigenciatm" class="form-control" value="{!!  $vehiculo->vigenciatm  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="seguroct">Seguro contra actual</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="seguroct" id="seguroct" class="form-control" value="{!!  $vehiculo->seguroct  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciact">Vigencia s.contra actual</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciact" id="vigenciact" class="form-control" value="{!!  $vehiculo->vigenciact  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="seguroect">Seguro s. ect</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="seguroect" id="seguroect" class="form-control" value="{!!  $vehiculo->seguroect  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciaect">Vigencia s. ect</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciaect" id="vigenciaect" class="form-control" value="{!!  $vehiculo->vigenciaect  !!}" readonly/>
	                            </div>
	                        </div>

        </div>
        <div class="panel-footer">
            <a href="/vehiculo" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
        </div>
    </div>
</form>

@endsection