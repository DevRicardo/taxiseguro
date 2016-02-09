@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Toperacione</a></li>
    <li><a href="#">Editar</a></li>
</ul>
<!-- END BREADCRUMB -->
{!! Form::open(array("url" => "toperacione/".$toperacione->id, "method" => "PUT", "class"=>"form-horizontal")) !!}
    <div class="panel panel-warning">
        <div class="panel-heading">
            @include("flash::message")
            <h3 class="panel-title"><strong>Editar toperacione</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="id">Id</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="id" id="id" class="form-control" value="{!!  $toperacione->id  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="numerotageta">Numerotageta</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="numerotageta" id="numerotageta" class="form-control" value="{!!  $toperacione->numerotageta  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatargeta">Vigenciatargeta</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatargeta" id="vigenciatargeta" class="form-control" value="{!!  $toperacione->vigenciatargeta  !!}" />
	                            </div>
	                        </div>
            <input type="hidden" name="producto_id" id="producto_id" value="{!! $toperacione->producto_id !!}"/>
        </div>
        <div class="panel-footer">
            <a href="/toperacione" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection