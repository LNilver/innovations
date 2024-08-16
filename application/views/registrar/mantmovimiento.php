<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS (incluyendo el plugin Modal) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
jQuery(function($) {
    $('#ModalMante').modal('show');
});
</script>

<div class="modal fade" id="ModalMante" tabindex="-1" aria-labelledby="ModalManteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalManteLabel"><i class="fa fa-table"></i><?php echo $titulofrm; ?></h5>
            </div>
            <div class="modal-body">
                <form id="frm_mant" class="" name="frm_evaluador" method="post" enctype="multipart/form-data" action="<?php echo base_url('Inventario_controlador/insertarMovimiento')?>">
                    <input type="hidden" name="editar" value="<?php echo $editar; ?>">
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Herramienta:</label>
                            <input type="text" class="form-control" id="herramienta" name="herramienta" value="<?php echo $inventario->nombreherramienta;?>" readonly>
                        </div>                    
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Responsable:</label>
                            <input type="text" class="form-control" id="responsable" name="responsable" value="<?php echo $inventario->usuario;?>" readonly>
                        </div>
                    </div>
                        <div class="row">
                            <?php if ($editar == 'NO') { ?>
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Entregado a:</label>
                                <input type="text" class="form-control" id="nombreentrega" name="nombreentrega" required>
                            </div>
                            <?php } ?>
                            <?php if ($editar == 'SI') { ?>
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Serie:</label>
                                <input type="text" class="form-control" id="serieherramienta" name="serieherramienta" value="<?php echo $inventario->serieherramienta;?>" readonly>
                            </div>
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidad_herramienta" name="cantidad_herramienta" value="<?php echo $inventario->cantidad_herramienta;?>">
                            </div>
                            <?php } ?>
                            <?php if ($editar == 'NO') { ?>
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Fecha de entrega:</label>
                                <input type="text" class="form-control" id="fecha_movimiento" name="fecha_movimiento" readonly>
                            </div>
                            <?php } ?>
                        </div>  
                        <?php if ($editar == 'SI') { ?>
                        <div class="mb-1 col">
                            <label class="label col col-3">Estado</label>
                            <div class="col col-9">
                                <label>
                                    <input type="radio" id="status_herramienta" class="radiobox style-0" value="AC" <?php echo ($inventario->status_herramienta == 'AC') ? 'checked="true" ' : ''; ?> name="status_herramienta" required>
                                    <span>Activo</span>
                                </label>
                                <label>
                                    <input type="radio" id="status_herramienta" class="radiobox style-0" value="DS" <?php echo ($inventario->status_herramienta == 'DS') ? 'checked="true" ' : ''; ?> name="status_herramienta" required>
                                    <span>Desactivado</span>
                                </label>                           
                            </div>
                        </div>
                        <?php } ?> 
                        <input type="hidden" class="form-control" id="almaceninventario" name="almaceninventario" value="<?php echo $inventario->almacenherramienta;?>" readonly>
                        <input type="hidden" class="form-control" id="id_herramienta" name="id_herramienta" value="<?php echo $inventario->id_herramienta;?>" readonly>              
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="frm_mant">Guardar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function actualizarReloj() {
    var fechaHoraActual = new Date();
    var year = fechaHoraActual.getFullYear();
    var month = ('0' + (fechaHoraActual.getMonth() + 1)).slice(-2);
    var day = ('0' + fechaHoraActual.getDate()).slice(-2);
    var hours = ('0' + fechaHoraActual.getHours()).slice(-2);
    var minutes = ('0' + fechaHoraActual.getMinutes()).slice(-2);
    var seconds = ('0' + fechaHoraActual.getSeconds()).slice(-2);
    var fechaHoraFormateada = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
    var elemento = document.getElementById('fecha_movimiento');
    if (elemento) {
        elemento.value = fechaHoraFormateada;
    } else {
        console.error('El elemento con ID "fecha_movimiento" no se encontró en el DOM.');
    }
}

$(document).ready(function() {
    setInterval(actualizarReloj, 1000);
    actualizarReloj(); 
});
</script>
