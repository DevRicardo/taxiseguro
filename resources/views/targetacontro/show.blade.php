@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Targetacontro</a></li>
    <li><a href="#">Detalle</a></li>
</ul>
<!-- END BREADCRUMB -->
<form class="form-horizontal">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Detalle targetacontro</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="id">Id</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="id" id="id" class="form-control" value="{!!  $targetacontro->id  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="numero">Numero</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="numero" id="numero" class="form-control" value="{!!  $targetacontro->numero  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="vigenciatc">Vigenciatc</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="vigenciatc" id="vigenciatc" class="form-control" value="{!!  $targetacontro->vigenciatc  !!}" readonly/>
	                            </div>
	                        </div>
        </div>
        <div class="panel-footer">
            <a href="/targetacontro" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
        </div>
    </div>
</form>

@endsection