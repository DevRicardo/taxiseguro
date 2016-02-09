@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="{!! url('/vehiculo') !!}">Vehiculo</a></li>
    <li><a href="#">Nuevo</a></li>
</ul> 
<!-- END BREADCRUMB -->
<form class="form-horizontal" method="POST" action="/vehiculo">
	@include("flash::message")
    <div class="panel panel-warning">
        <div class="panel-heading">

            <h3 class="panel-title"><strong>Nuevo vehiculo</strong></h3>
        </div>
        <div class="panel-body">
<fieldset>
	<legend>Datos del vehiculo</legend>

			    <div class="row">
					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="placa">Placa</label>
							<div class="">
								<input type="text" name="placa" id="placa" class="form-control" value="{{ old('placa') }}"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="movil">Movil</label>
							<div class="">
								<input type="text" name="movil" id="movil" class="form-control" value="{{ old('movil') }}"/>
							</div>
						</div>

					</div>


                 </div>

			     <div class="row">

					 <div class="col-md-4 col-lg-offset-1">
						 <div class="form-group">
							 <label class="control-label" for="marca">Marca</label>
							 <div class="">
								 <input type="text" name="marca" id="marca" class="form-control" value="{{ old('marca') }}"/>
							 </div>
						 </div>
					 </div>

					 <div class="col-md-4 col-lg-offset-1">
						 <div class="form-group">
							 <label class="control-label" for="modelo">Modelo</label>
							 <div class="">
								 <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo') }}"/>
							 </div>
						 </div>
					 </div>

				 </div>
</fieldset>

<!--  --------------------------------------------    DOCUMENTOS DEL VEHICULO   -------------------------- -->

			<fieldset>
				<legend>Documentos</legend>

			<div class="row">

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="soat">Soat</label>
						<div class="">
							<input type="text" name="soat" id="soat" class="form-control" value="{{ old('soat') }}"/>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class=" control-label" for="vigenciasoat">Vigencia soat</label>
						<div class="">
							<input type="text" name="vigenciasoat" id="vigenciasoat" class="form-control tiempo" value="{{ old('vigenciasoat') }}"/>
						</div>
					</div>
				</div>

			</div>


			<div class="row">

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="tecnomecanica">Tecnomecanica</label>
						<div class="">
							<input type="text" name="tecnomecanica" id="tecnomecanica" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="vigenciatm">Vigencia tecnomecanica</label>
						<div class="">
							<input type="text" name="vigenciatm" id="vigenciatm" class="form-control tiempo"/>
						</div>
					</div>
				</div>

			</div>




			<div class="row">

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="seguroct">Seguro contra actual</label>
						<div class="">
							<input type="text" name="seguroct" id="seguroct" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="vigenciact">Vigencia s. contraactual</label>
						<div class="">
							<input type="text" name="vigenciact" id="vigenciact" class="form-control tiempo"/>
						</div>
					</div>
				</div>

			</div>



			<div class="row">

				<div class="col-md-4 col-lg-offset-1">
					<div class="form-group">
						<label class="control-label" for="seguroect">Seguro ect</label>
						<div class="">
							<input type="text" name="seguroect" id="seguroect" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-offset-1">

					<div class="form-group">
						<label class="control-label" for="vigenciaect">Vigencia s. ect</label>
						<div class="">
							<input type="text" name="vigenciaect" id="vigenciaect" class="form-control tiempo"/>
						</div>
					</div>
				</div>

			</div>
			<div class="row">

				<div class="col-md-4 col-lg-offset-1">

					<div class="form-group">
						<label class="control-label" for="toperacion_id">Tarjeta operación</label>
						<div class="">
							<input type="text" name="toperacion_id" id="toperacion_id" class="form-control"/>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-offset-1">

				</div>

			</div>

</fieldset>

<!--  -------------------------------------------------------OPERARIOS ------------------------------------>

			<fieldset>
				<legend>Conductores</legend>
			<div class="row">

				<div class="col-md-4 col-lg-offset-1">

				</div>

				<div class="col-md-4 col-lg-offset-1">

				</div>

			</div>
		</fieldset>













        </div>
        <div class="panel-footer">
            <a href="/vehiculo" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Registrar" />
        </div>
    </div>
</form>

@endsection

@section("script")



@endsection