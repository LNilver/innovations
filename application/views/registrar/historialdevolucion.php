<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div style="text-align: center; margin-top: 60px;">
    <h1 class="text-white">HISTORIAL</h1>
</div>
<style>
    #documentosTable {
        font-size: 15px;    
    }

    #documentosTable th,
    #documentosTable td {
        padding: 6px;
    }
</style>
<div class="container-fluid mt-7">
    <div class="panel panel-success">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="documentosTable" class="table table-striped table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>N.</th>
                            <th>Herramienta</th>
                            <th>Entrado por</th>
                            <th>Entregado a</th>                            
                            <th>Fecha Salida</th>
                            <th>Recepcionado por</th>
                            <th>Detalle</th>
                            <th>Fecha Devolucion</th>                            
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center; vertical-align: middle;">
                        <?php foreach (array_reverse($grid) as $fila) { ?>
                            <tr>
                                <td><?php echo $fila->id_movimiento; ?></td>
                                <td><?php echo $fila->id_herramienta; ?></td>
                                <td><?php echo $fila->id_usuario; ?></td>
                                <td><?php echo $fila->nombreentrega; ?></td>                                
                                <td><?php echo $fila->fecha_movimiento; ?></td>
                                <td><?php echo $fila->Recepcionado; ?></td>
                                <td><?php echo $fila->descripcionmovimiento; ?></td>
                                <td><?php echo $fila->fecha_devolucion; ?></td>
                                <td><?php echo $fila->tipo_movimiento; ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function() {
    $('#documentosTable').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
});
</script>