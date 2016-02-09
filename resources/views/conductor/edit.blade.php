@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/conductor') !!}">Conductor</a></li>
    <li><a href="#">Editar</a></li>
</ul>
<!-- END BREADCRUMB -->
{!! Form::open(array("url" => "conductor/".$conductore->id, "method" => "PUT", "class"=>"form-horizontal")) !!}
@include("flash::message")
    <div class="panel panel-warning">
        <div class="panel-heading">

            <h3 class="panel-title"><strong>Editar conductore</strong></h3>
        </div>
        <div class="panel-body">
            

						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="cc">Cc</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="cc" id="cc" class="form-control" value="{!!  $conductore->cc  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="nombres">Nombres</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="nombres" id="nombres" class="form-control" value="{!!  $conductore->nombres  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="apellidos">Apellidos</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="apellidos" id="apellidos" class="form-control" value="{!!  $conductore->apellidos  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="direccion">Direccion</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="direccion" id="direccion" class="form-control" value="{!!  $conductore->direccion  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="telefono">Telefono</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="telefono" id="telefono" class="form-control" value="{!!  $conductore->telefono  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="email">Email</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="email" id="email" class="form-control" value="{!!  $conductore->email  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="categoria">Categoria</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="categoria" id="categoria" class="form-control" value="{!!  $conductore->categoria  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigencia">Vigencia</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigencia" id="vigencia" class="form-control tiempo" value="{!!  $conductore->vigencia  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="eps">Eps</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="eps" id="eps" class="form-control" value="{!!  $conductore->eps  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="arl">Arl</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="arl" id="arl" class="form-control" value="{!!  $conductore->arl  !!}" />
	                            </div>
	                        </div>

        </div>
        <div class="panel-footer">
            <a href="/conductor" name="btn_back" id="btn_back" class="btn btn-default">Volver</a>
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection