@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Propietario</a></li>
    <li><a href="#">Detalle</a></li>
</ul>
<!-- END BREADCRUMB -->
<form class="form-horizontal">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Detalle propietario</strong></h3>
        </div>
        <div class="panel-body">
            
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="id">Id</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="id" id="id" class="form-control" value="{!!  $propietario->id  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="cc">Cc</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="cc" id="cc" class="form-control" value="{!!  $propietario->cc  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="nombres">Nombres</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="nombres" id="nombres" class="form-control" value="{!!  $propietario->nombres  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="apellidos">Apellidos</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="apellidos" id="apellidos" class="form-control" value="{!!  $propietario->apellidos  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="direccion">Direccion</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="direccion" id="direccion" class="form-control" value="{!!  $propietario->direccion  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="telefono">Telefono</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="telefono" id="telefono" class="form-control" value="{!!  $propietario->telefono  !!}" readonly/>
	                            </div>
	                        </div>
						    <div class="form-group">
	                            <label class="col-md-3 col-xs-12 control-label" for="email">Email</label>
	                            <div class="col-md-6 col-xs-12"> 
	                                <input type="text" name="email" id="email" class="form-control" value="{!!  $propietario->email  !!}" readonly/>
	                            </div>
	                        </div>
        </div>
        <div class="panel-footer">
            <a href="/propietario" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
        </div>
    </div>
</form>

@endsection