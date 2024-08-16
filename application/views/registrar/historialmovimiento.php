<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div style="text-align: center; margin-top: 60px;">
    <h1 class="text-white">HISTORIAL DE SALIDA</h1>
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
                            <th>Responsable</th>
                            <th>Entrado a</th>
                            <th>Fecha Entregado</th>
                            <th>Almacen</th>                                                        
                            <th>Accion</th>
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
                                <td><?php echo $fila->almaceninventario; ?></td>
                                <td class="pull-right opciones"> 
                                    <button style="width: 10px; display: inline-block; position: relative; margin-bottom: 10px;" 
                                            id="devolucion_<?php echo $fila->id_movimiento; ?>" 
                                            name="devolucion_<?php echo $fila->id_movimiento; ?>" 
                                            value="<?php echo $fila->id_movimiento; ?>" 
                                            data-usuario="<?php echo $fila->id_usuario; ?>"
                                            class="devolucion btn btn-danger rounded-circle hidden-print" 
                                            data-placement="left" 
                                            rel="tooltip" 
                                            data-original-title="Vista">
                                        <i class="fa fa-undo-alt" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $(".devolucion").click(function(e){
        e.preventDefault();
        var id_movimiento = $(this).val();
        var id_usuario = $(this).data('usuario');

        Swal.fire({
            icon: 'warning',
            title: 'Estado',
            text: '¿En que estado se esta devolviendo la herramienta?',
            input: 'text',
            inputPlaceholder: 'Devolucion...',
            showCancelButton: true,
            confirmButtonText: 'Sí',
            cancelButtonText: 'Cancelar',
            preConfirm: (value) => {
                if (!value) {
                    Swal.showValidationMessage('Por favor, rellena el campo.');
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                const descripcionmovimiento = result.value;
                var url = "<?php echo base_url();?>Inventario_controlador/updateMovimiento/";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: { id_movimiento: id_movimiento, id_usuario: id_usuario, descripcionmovimiento: descripcionmovimiento },
                    success: function(response) {
                        var result = JSON.parse(response);
                        if (result.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: result.message,
                            }).then(function() {
                                $("#devolucion_" + id_movimiento).closest('tr').remove();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: result.message,
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo eliminar el documento.',
                        });
                    }
                });
            }
        });
    });
});

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