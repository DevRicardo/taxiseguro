@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/conductor') !!}">Conductore</a></li>
    <li><a href="#">Nuevo</a></li>
</ul> 
<!-- END BREADCRUMB -->
<form class="form-horizontal" method="POST" action="/conductor">
	@include("flash::message")
    <div class="panel panel-warning">
        <div class="panel-heading">

            <h3 class="panel-title"><strong>Nuevo conductore</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="cc">Cc</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="cc" id="cc" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="nombres">Nombres</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="nombres" id="nombres" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="apellidos">Apellidos</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="apellidos" id="apellidos" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="direccion">Direccion</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="direccion" id="direccion" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="telefono">Telefono</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="telefono" id="telefono" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="email">Email</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="email" id="email" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="categoria">Categoria</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="categoria" id="categoria" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigencia">Vigencia</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigencia" id="vigencia" class="form-control tiempo"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="eps">Eps</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="eps" id="eps" class="form-control"/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="arl">Arl</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="arl" id="arl" class="form-control"/>
	                            </div>
	                        </div>
        </div>
        <div class="panel-footer">
            <a href="/conductor" name="btn_back" id="btn_back" class="btn btn-default">Volver</a>
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Registrar" />
        </div>
    </div>
</form>

@endsection