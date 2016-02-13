@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/conductor') !!}">Conductor</a></li>
    <li><a href="#">Detalle</a></li>
</ul>
<!-- END BREADCRUMB -->
<form class="form-horizontal">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Detalle conductore</strong></h3>
        </div>
        <div class="panel-body">
			<fieldset>
				<legend>Datos Básicos</legend>

				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="cc">Cc</label>
							<div class="">
								<input type="text" name="cc" id="cc" value="{!!  $conductore->cc  !!}" class="form-control"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">



					</div>


				</div>


				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="nombres">Nombres</label>
							<div class="">
								<input type="text" name="nombres" id="nombres" value="{!!  $conductore->nombres  !!}" class="form-control"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="apellidos">Apellidos</label>
							<div class="">
								<input type="text" name="apellidos" id="apellidos" value="{!!  $conductore->apellidos  !!}" class="form-control"/>
							</div>
						</div>
					</div>


				</div>


			</fieldset>


			<fieldset>
				<legend>Contacto</legend>
				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="direccion">Direccion</label>
							<div class="">
								<input type="text" name="direccion" id="direccion" value="{!!  $conductore->direccion  !!}" class="form-control"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="telefono">Telefono</label>
							<div class="">
								<input type="text" name="telefono" id="telefono" value="{!!  $conductore->telefono  !!}" class="form-control"/>
							</div>
						</div>
					</div>

				</div>


				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="email">Email</label>
							<div class="">
								<input type="text" name="email" id="email" class="form-control" value="{!!  $conductore->email  !!}" />
							</div>
						</div>
					</div>

					<div class="col-md-4 col-md-offset-1">



					</div>

				</div>

			</fieldset>

			<fieldset>
				<legend>Licencia</legend>

				<div class="row">
					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="categoria">Categoria</label>
							<div class="">
								<input type="text" name="categoria" id="categoria" value="{!!  $conductore->categoria  !!}" class="form-control"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="vigencia">Vigencia</label>
							<div class="">
								<input type="text" name="vigencia" id="vigencia" value="{!!  $conductore->vigencia  !!}" class="form-control tiempo"/>
							</div>
						</div>
					</div>


				</div>
			</fieldset>

			<fieldset>
				<legend>Seguridad social</legend>
				<div class="row">
					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="eps">Eps</label>
							<div class="">
								<input type="text" name="eps" id="eps" value="{!!  $conductore->eps  !!}"  class="form-control"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">
						<div class="form-group">
							<label class="control-label" for="arl">Arl</label>
							<div class="">
								<input type="text" name="arl" id="arl" value="{!!  $conductore->arl  !!}" class="form-control"/>
							</div>
						</div>
					</div>


				</div>
			</fieldset>

			<fieldset>
				<legend>Vehiculos relacionados</legend>

				<div class="row">

					<div class="col-md-10 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="vehiculo_id">Vehiculos</label>
							<div class="">
								<select name="vehiculo_id[]" id="vehiculo_id"  multiple="multiple" class="form-control">
									@foreach($vehiculos AS $vehiculo)
										<option value="{!! $vehiculo->id !!}">
											{!! $vehiculo->placa !!}
										</option>
									@endforeach
								</select>
							</div>
						</div>

					</div>



				</div>

				@foreach($conductore->vehiculos()->get() AS $vehiculo)

					<input type="hidden" name="v_id[]"  value="{!! $vehiculo->id !!}">

				@endforeach

			</fieldset>
        </div>
        <div class="panel-footer">
            <a href="/conductor" name="btn_back" id="btn_back" class="btn btn-default">Volver</a>
        </div>
    </div>
</form>

@endsection

@section('script')
	var id=[];
	var conteo = 0;
	$("input[name*='v_id']").each(function(){
	id[conteo] = this.value
	conteo++;
	});
	$("#vehiculo_id").val(id).trigger("change")
	$(".form-control").attr('disabled',"disabled");
@endsection