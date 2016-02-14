@extends("layouts.app")

@section("content")

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#/">Inicio</a></li>
        <li><a href="/agente">Agente</a></li>
        <li><a href="#">Editar</a></li>
    </ul>
    <!-- END BREADCRUMB -->
    @include("flash::message")
    {!! Form::open(array("url" => "agente/".$agente->id, "method" => "PUT", "class"=>"form-horizontal")) !!}

    <div class="panel panel-warning">
            <div class="panel-heading">

                <h3 class="panel-title"><strong>Editar Agente</strong></h3>
            </div>
            <div class="panel-body">


                <fieldset>
                    <legend>Datos Básicos</legend>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">

                            <div class="form-group">
                                <label class="control-label" for="cc">Cc</label>
                                <div class="">
                                    <input type="text" name="cc" id="cc" value="{!! $agente->cc !!}" class="form-control"/>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="nombres">Nombres y apellidos</label>
                                <div class="">
                                    <input type="text" name="nombre_completo" id="nombre_completo" value="{!! $agente->nombre_completo !!}" class="form-control"/>
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
                                <label class="control-label" for="direccion">Celular</label>
                                <div class="">
                                    <input type="text" name="cel" id="cel" value="{!! $agente->cel !!}" class="form-control"/>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-md-offset-1">



                        </div>


                    </div>



                </fieldset>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="reset"> Restablecer contraseña
                            </label>
                        </div>

                    </div>
                    <div class="col-md-4 col-md-offset-1">

                    </div>
                </div>





            </div>
            <div class="panel-footer">
                <a href="/agente" name="btn_back" id="btn_back" class="btn btn-default">Volver</a>
                <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Actualizar" />
            </div>
        </div>
    {!! Form::close() !!}}

@endsection