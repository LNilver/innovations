<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div style="text-align: center; margin-top: 60px;">
    <h1 class="text-white">INVENTARIO DE SOLDADURA</h1>
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
                            <th>Nombre</th>
                            <th>Serie</th>
                            <th>Cantidad</th>
                            <th>Fecha Registro</th>
                            <th>Estado de Encuentro</th>
                            <th>Descripcion</th>
                            <th>Responsable</th>
                            <th>Codigo Generado</th>
                            <th>Proveedor</th>
                            <th>Estado</th>                            
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center; vertical-align: middle;">
                        <?php foreach (array_reverse($grid) as $fila) { ?>
                            <tr>
                                <td><?php echo $fila->id_herramienta; ?></td>
                                <td><?php echo $fila->nombreherramienta; ?></td>
                                <td><?php echo $fila->serieherramienta; ?></td>
                                <td><?php echo $fila->cantidad_herramienta; ?></td>
                                <td><?php echo $fila->fechaderegistroherramienta; ?></td>
                                <td><?php echo $fila->estadoencuentraherramienta; ?></td>
                                <td><?php echo $fila->descripcionherramienta; ?></td>
                                <td><?php echo $fila->usuario; ?></td>
                                <td><?php echo $fila->codigounico; ?></td>
                                <td><?php echo $fila->nombreproveedor; ?></td>
                                <td><?php echo span_color_status ($fila->status_herramienta); ?></td>
                                <td class="pull-right opciones"> 
                                    <div style="text-align: center;">
                                        <button style="width: 10px; display: inline-block; position: relative; margin-bottom: 10px;" id="salida_<?php echo $fila->id_herramienta; ?>" name="salida_<?php echo $fila->id_herramienta; ?>" value="<?php echo $fila->id_herramienta; ?>" class="salida btn btn-primary rounded-circle hidden-print" data-placement="left" rel="tooltip" data-original-title="Vista"><i class="fa fa-tools" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                        </button>
                                    </div>
                                    <div style="text-align: center;">
                                        <button style="width: 10px; display: inline-block; position: relative; margin-bottom: 10px;" id="editar_<?php echo $fila->id_herramienta; ?>" name="editar_<?php echo $fila->id_herramienta; ?>" value="<?php echo $fila->id_herramienta; ?>" class="editar btn btn-success rounded-circle hidden-print" data-placement="left" rel="tooltip" data-original-title="Vista"><i class="fa fa-pencil" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                        </button>
                                        <button style="width: 10px; display: inline-block; position: relative; margin-bottom: 10px;" id="eliminar_<?php echo $fila->id_herramienta; ?>" name="eliminar_<?php echo $fila->id_herramienta; ?>" value="<?php echo $fila->id_herramienta; ?>" class="eliminar btn btn-danger rounded-circle hidden-print" data-placement="left" rel="tooltip" data-original-title="Vista"><i class="fa fa-trash" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="div_ModalMant"> 
</div><!-- /.modal --> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.salida', function(event) {
        event.preventDefault();     
        var idelemento = $(this).val();
        var url = "<?php echo base_url() ?>Inventario_controlador/mantMovimiento/" + idelemento + "/salida";
        $("#div_ModalMant").load(url, function() {
            $('#ModalMante').modal('show');
        });
    });
    $(document).on('click', '.editar', function(event) {
        event.preventDefault();     
        var idelemento = $(this).val();
        var url = "<?php echo base_url() ?>Inventario_controlador/mantMovimiento/" + idelemento + "/editar";
        $("#div_ModalMant").load(url, function() {
            $('#ModalMante').modal('show');
        });
    });

    $(document).ready(function(){
        $(".eliminar").click(function(e){
            e.preventDefault();
            var id_herramienta = $(this).val();

            Swal.fire({
                icon: 'warning',
                title: 'Confirmación',
                text: '¿Estás seguro de que deseas eliminar este documento?',
                input: 'text',
                inputPlaceholder: 'Porque deseas eliminar...',
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
                    const motivo = result.value;
                    var url = "<?php echo base_url();?>Inventario_controlador/deleteHerramienta";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: { id_herramienta: id_herramienta, motivo: motivo },
                        success: function(response) {
                            var result = JSON.parse(response);
                            if (result.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Éxito',
                                    text: result.message,
                                }).then(function() {
                                    location.reload();
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