@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="/">Inicio</a></li>
    <li><a href="/propietario">Propietario</a></li>
    <li><a href="#">Editar</a></li>
</ul>
<!-- END BREADCRUMB -->
@include("flash::message")
{!! Form::open(array("url" => "propietario/".$propietario->id, "method" => "PUT", "class"=>"form-horizontal")) !!}
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Editar propietario</strong></h3>
        </div>
        <div class="panel-body">



			<fieldset>
				<legend>Datos Básicos</legend>

				<div class="row">
					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="cc">Cc</label>
							<div class="">
								<input type="text" name="cc" id="cc" value="{!!  $propietario->cc  !!}" class="form-control"/>
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
								<input type="text" name="nombres" id="nombres" value="{!!  $propietario->nombres  !!}" class="form-control"/>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="apellidos">Apellidos</label>
							<div class="">
								<input type="text" name="apellidos" id="apellidos" value="{!!  $propietario->apellidos  !!}" class="form-control"/>
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
								<input type="text" name="direccion" id="direccion" value="{!!  $propietario->direccion  !!}" class="form-control"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">


						<div class="form-group">
							<label class="control-label" for="telefono">Telefono</label>
							<div class="">
								<input type="text" name="telefono" id="telefono" value="{!!  $propietario->telefono  !!}" class="form-control"/>
							</div>
						</div>

					</div>


				</div>

				<div class="row">
					<div class="col-md-4 col-md-offset-1">

						<div class="form-group">
							<label class="control-label" for="email">Email</label>
							<div class="col-xs-12">
								<input type="text" name="email" id="email" value="{!!  $propietario->email  !!}" class="form-control"/>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-md-offset-1">




					</div>


				</div>

			</fieldset>




        <div class="panel-footer">
            <a href="/propietario" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
            <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
        </div>
    </div>
{!! Form::close() !!}

@endsection