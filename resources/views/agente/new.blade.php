@extends("layouts.app")

@section("content")

    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#/">Inicio</a></li>
        <li><a href="/agente">Agente</a></li>
        <li><a href="#">Nuevo</a></li>
    </ul>
    <!-- END BREADCRUMB -->
    @include("flash::message")
    <form class="form-horizontal" method="POST" action="/agente">
        <div class="panel panel-warning">
            <div class="panel-heading">

                <h3 class="panel-title"><strong>Nuevo Agente</strong></h3>
            </div>
            <div class="panel-body">


                <fieldset>
                    <legend>Datos Básicos</legend>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">

                            <div class="form-group">
                                <label class="control-label" for="cc">Cc</label>
                                <div class="">
                                    <input type="text" name="cc" id="cc" class="form-control"/>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-md-offset-1">
                            <div class="form-group">
                                <label class="control-label" for="nombres">Nombres y apellidos</label>
                                <div class="">
                                    <input type="text" name="nombre_completo" id="nombre_completo" class="form-control"/>
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
                                    <input type="text" name="cel" id="cel" class="form-control"/>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-md-offset-1">



                        </div>


                    </div>



                </fieldset>




            </div>
            <div class="panel-footer">
                <a href="/agente" name="btn_back" id="btn_back" class="btn btn-default">Volver</a>
                <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary pull-right" value="Registrar" />
            </div>
        </div>
    </form>

@endsection