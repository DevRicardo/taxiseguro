@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Targetacontro</a></li>
    <li><a href="#">Editar</a></li>
</ul>
<!-- END BREADCRUMB -->
{!! Form::open(array("url" => "targetacontro/".$targetacontro->id, "method" => "PUT", "class"=>"form-horizontal")) !!}
    <div class="panel panel-warning">
        <div class="panel-heading">
            @include("flash::message")
            <h3 class="panel-title"><strong>Editar targetacontro</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="id">Id</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="id" id="id" class="form-control" value="{!!  $targetacontro->id  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="numero">Numero</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="numero" id="numero" class="form-control" value="{!!  $targetacontro->numero  !!}" />
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatc">Vigenciatc</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatc" id="vigenciatc" class="form-control" value="{!!  $targetacontro->vigenciatc  !!}" />
	                            </div>
	                        </div>
            <input type="hidden" name="producto_id" id="producto_id" value="{!! $targetacontro->producto_id !!}"/>
        </div>
        <div class="panel-footer">
            <a href="/targetacontro" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection