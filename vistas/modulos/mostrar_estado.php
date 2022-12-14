
<?php
	$control = new Controlador();
	$control -> borrarEstadoControlador();
				
?>
<script>
$(document).ready( function () {
$('#myTable').DataTable();
} );
$(document).ready(function() {
    $('#myTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "../server_side/scripts/server_processing.php",
        
    } );
} );
</script>
<div class="tablas-borde">
<h2 class="pull-left">Lista de estados</h2>
<table id="listaControl" class="table table-striped-columns table-fond">
<table id="myTable" class="display" cellspacing="0" width="100%" style="background-color: #064635; color: #fff;">
<thead>
<tr>
<th>Id estado</th>
<th>Nombre del estado</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>
<?php
				$control = new Controlador();
				$control -> listadoEstadoControlador();
				
			?>
<tbody>
</div>
<script>
$.extend( true, $.fn.dataTable.defaults, {
    "language": {
        "decimal": ",",
        "thousands": ".",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoPostFix": "",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "lengthMenu": "Mostrar  _MENU_  registros",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchPlaceholder": "Término de búsqueda",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "aria": {
            "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        //only works for built-in buttons, not for custom buttons
        "buttons": {
            "create": "Nuevo",
            "edit": "Cambiar",
            "remove": "Borrar",
            "copy": "Copiar",
            "csv": "fichero CSV",
            "excel": "tabla Excel",
            "pdf": "documento PDF",
            "print": "Imprimir",
            "colvis": "Visibilidad columnas",
            "collection": "Colección",
            "upload": "Seleccione fichero...."
        },
        "select": {
            "rows": {
                _: '%d filas seleccionadas',
                0: 'clic fila para seleccionar',
                1: 'una fila seleccionada'
            }
        }
    }           
} );    $('#example').dataTable( {
    paging: false,
    searching: false
} );</script>


</html>