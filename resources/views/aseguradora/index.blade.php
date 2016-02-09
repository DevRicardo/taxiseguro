@extends("layout.layout")

@section("contenido")

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Aseguradora</a></li>
    <li><a href="#">Listado</a></li>
</ul> 
<!-- END BREADCRUMB -->
<div class="panel panel-warning">
    <div class="panel-heading">                                
        <h3 class="panel-title"><strong>Listado de aseguradoras</strong>
	       	<a href="aseguradora/create" name="btn_nuevo" id="btn_nuevo" class="btn btn-sm btn-success pull-right">
	       		<span class="glyphicon glyphicon-plus"></span> Nuevo
	       	</a>
        </h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table datatable"><thead>
			    		<tr>
					     <th>Id</th>
						    <th>Nombre</th>
						    <th>Detalle</th>
						<th>Editar</th>
					    <th>Eliminar</th>
					 </tr>
					</thead>
					<tbody>@foreach ($aseguradoras as $valor)								
								<tr>
								<td>{!! $valor->id !!}</td>
						    <td>{!! $valor->nombre !!}</td>
						    <td>
						<a href="aseguradora/{!! $valor->id !!}" class="btn btn-sm btn-default" >
				    		<span class="glyphicon glyphicon-eye-open"></span>
				    	</a>
				    	</td>
						<td>
						<a href="aseguradora/{!! $valor->id !!}/edit" class="btn btn-sm btn-info" >
				    		<span class="glyphicon glyphicon-pencil"></span>
				    	</a>
				    	</td>
						<td>
					    {!! Form::open(array("url" => "aseguradora/".$valor->id, "method" => "DELETE")) !!}
					        <button type="submit" class="btn btn-sm btn-danger" >
				    		    <span class="glyphicon glyphicon-remove"></span>
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