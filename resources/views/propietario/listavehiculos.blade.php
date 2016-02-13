@extends("layouts.app")

@section("content")

    <!-- START BREADCRUMB -->
    @include("flash::message")
    <ul class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li><a href="/propietario/{!! $propietario !!}">Propietario</a></li>
        <li><a href="#">Asignar un vehiculo</a></li>
    </ul>
    <!-- END BREADCRUMB -->
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Listado de vehiculos</strong>

            </h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table datatable"><thead>
                    <tr>

                        <th>Placa</th>
                        <th>Movil</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>@foreach ($vehiculos as $valor)
                        <tr>

                            <td>{!! $valor->placa !!}</td>
                            <td>{!! $valor->movil !!}</td>
                            <td>{!! $valor->marca !!}</td>
                            <td>{!! $valor->modelo !!}</td>


                            <td>
                                {!! Form::open(array("url" => "asignar/".$valor->id."/".$propietario, "method" => "POST","class"=>"form-delete")) !!}

                                <button type="submit" class="btn btn-sm btn-success" >
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                                {!! Form::close() !!}

                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("script")

    $(document).ready(function(){
    // eventos -----------------------




    //--------------------------------

    if($(".datatable").length > 0){
    $(".datatable").dataTable({
    "sPaginationType": "full_numbers",
    "order": [[0,"desc"]],
    "oLanguage": {
    "sEmptyTable":     "No hay datos disponibles en la tabla",
    "sInfo":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando 0 a 0 de 0 registros",
    "sInfoFiltered":   "(Filtrados _MAX_ de registros en total)",
    "sInfoPostFix":    "",
    "sThousands":      ",",
    "sLengthMenu":     "Mostrando _MENU_ registros",
    "sLoadingRecords": "Cargando...",
    "sProcessing":     "Procesando...",
    "sSearch":         "Buscar:",
    "sZeroRecords":    "No hay coincidencias en registros",
    "oPaginate": {
    "sFirst":    '<span class="glyphicon glyphicon-chevron-left"></span><span class="glyphicon glyphicon-chevron-left"></span>',
    "sPrevious": '<span class="glyphicon glyphicon-chevron-left"></span>',
    "sNext":     '<span class="glyphicon glyphicon-chevron-right"></span>',
    "sLast":     '<span class="glyphicon glyphicon-chevron-right"></span><span class="glyphicon glyphicon-chevron-right"></span>'
    },
    "aria": {
    "sortAscending":  ": activar para ordenar columna ascendentemente",
    "sortDescending": ": activar para ordenar columna descendentemente",
    }
    }
    });
    $(".datatable").on("page.dt",function () {
    onresize(100);
    });
    }
    });

@endsection


