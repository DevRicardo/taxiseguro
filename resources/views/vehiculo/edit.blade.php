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



			<!--  NUEVO FORMULARIO --->
			<fieldset>
				<legend>Datos del vehiculo</legend>

				<div class="row">
					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="placa">Placa</label>
							<div class="">
								<input type="text" name="placa" id="placa" class="form-control" value="{{ $vehiculo->placa }}"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="movil">Movil</label>
							<div class="">
								<input type="text" name="movil" id="movil" class="form-control" value="{{ $vehiculo->movil }}"/>
							</div>
						</div>

					</div>


				</div>

				<div class="row">

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="marca">Marca</label>
							<div class="">
								<input type="text" name="marca" id="marca" class="form-control" value="{{ $vehiculo->marca }}"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="modelo">Modelo</label>
							<div class="">
								<input type="text" name="modelo" id="modelo" class="form-control" value="{{ $vehiculo->modelo }}"/>
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
								<input type="text" name="soat" id="soat" class="form-control" value="{{ $vehiculo->soat }}"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class=" control-label" for="vigenciasoat">Vigencia soat</label>
							<div class="">
								<input type="text" name="vigenciasoat" id="vigenciasoat" class="form-control tiempo" value="{{ $vehiculo->vigenciasoat }}"/>
							</div>
						</div>
					</div>

				</div>


				<div class="row">

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="tecnomecanica">Tecnomecanica</label>
							<div class="">
								<input type="text" name="tecnomecanica" id="tecnomecanica" class="form-control" value="{{ $vehiculo->tecnomecanica }}"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="vigenciatm">Vigencia tecnomecanica</label>
							<div class="">
								<input type="text" name="vigenciatm" id="vigenciatm" class="form-control tiempo" value="{{$vehiculo->vigenciatm}}"/>
							</div>
						</div>
					</div>

				</div>




				<div class="row">

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="seguroct">Seguro contra actual</label>
							<div class="">
								<input type="text" name="seguroct" id="seguroct" class="form-control" value="{{$vehiculo->seguroct}}"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="vigenciact">Vigencia s. contraactual</label>
							<div class="">
								<input type="text" name="vigenciact" id="vigenciact" class="form-control tiempo" value="{{$vehiculo->vigenciact}}"/>
							</div>
						</div>
					</div>

				</div>



				<div class="row">

					<div class="col-md-4 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="seguroect">Seguro ect</label>
							<div class="">
								<input type="text" name="seguroect" id="seguroect" class="form-control" value="{{ $vehiculo->seguroect }}"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-lg-offset-1">

						<div class="form-group">
							<label class="control-label" for="vigenciaect">Vigencia s. ect</label>
							<div class="">
								<input type="text" name="vigenciaect" id="vigenciaect" class="form-control tiempo" value="{{ $vehiculo->vigenciaect }}"/>
							</div>
						</div>
					</div>

				</div>
				<div class="row">

					<div class="col-md-4 col-lg-offset-1">

						<div class="form-group">
							<label class="control-label" for="toperacion_id">Tarjeta operación</label>
							<div class="">
								<input type="text" name="toperacion_id" id="toperacion_id" class="form-control" value="{{$vehiculo->toperacion_id}}"/>
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

					<div class="col-md-10 col-lg-offset-1">
						<div class="form-group">
							<label class="control-label" for="toperacion_id">Conductores</label>
							<div class="">
								<select name="conductor_id[]" id="conductor_id"  multiple="multiple" class="form-control">
									@foreach($vehiculo->conductores()->get() AS $conductor)
										<option value="{!! $conductor->id !!}">
											{!! $conductor->cc." ".$conductor->nombres." ".$conductor->apellidos !!}
										</option>
									@endforeach
								</select>
							</div>
						</div>

					</div>



				</div>
			</fieldset>














		</div>
        <div class="panel-footer">
            <a href="/vehiculo" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection