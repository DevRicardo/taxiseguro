@extends("layouts.app")

@section("content")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="/">Inicio</a></li>
    <li><a href="/propietario">Propietario</a></li>
    <li><a href="#">Listado de vehiculos</a></li>
</ul>
<!-- END BREADCRUMB -->
<form class="form-horizontal">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Listado de vehiculos</strong>
				<a href="/listado/{!! $propietarios->id !!}" name="btn_nuevo" id="btn_nuevo" class="btn btn-sm btn-success pull-right">
					<span class="glyphicon glyphicon-plus"></span> Agregar
				</a>
			</h3>

        </div>
        <div class="panel-body">

			<div class="table-responsive">
				<table class="table datatable"><thead>
					<tr>

						<th>#</th>
						<th>Placa</th>
						<th>Movil</th>
						<th>Acciones</th>
					</tr>
					</thead>
					<tbody>
					    @foreach ($vehiculos as $valor)

							<tr>
								<td></td>
								<td>{!! $valor->placa !!}</td>
								<td>{!! $valor->movil !!}</td>


								<td>
									{!! Form::open(array("url" => "", "method" => "POST","class"=>"form-delete")) !!}

									<button type="submit" class="btn btn-sm btn-danger" >
										<span class="glyphicon glyphicon-trash"></span>
									</button>
									{!! Form::close() !!}

								</td>
							</tr>

					    @endforeach

			        </tbody>
				</table>
			</div>
        </div>
        <div class="panel-footer">
            <a href="/propietario" name="btn_back" id="btn_back" class="btn btn-default">Volver</a> 
        </div>
    </div>
</form>

@endsection

@section("script")

	$(document).ready(function(){
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