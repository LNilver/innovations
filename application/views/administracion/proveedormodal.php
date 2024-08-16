<!-- jQuery --> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS (incluyendo el plugin Modal) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                <form id="frm_mant" class="" name="frm_evaluador" method="post" enctype="multipart/form-data" action="<?php echo base_url('Inventario_controlador/insertProveedor')?>">
                    <input type="hidden" name="editar" value="<?php echo $editar; ?>">
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreproveedor" name="nombreproveedor" value="<?php echo ($editar == 'SI') ? $proveedor->nombreproveedor : ''; ?>"required>


                        </div>                    
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Razon Social:</label>
                            <input type="text" class="form-control" id="razonsocialproveedor" name="razonsocialproveedor" value="<?php echo ($editar == 'SI') ? $proveedor->razonsocialproveedor : ''; ?>"required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Ruc:</label>
                                <input type="text" class="form-control" id="rucproveedor" name="rucproveedor" value="<?php echo ($editar == 'SI') ? $proveedor->rucproveedor : ''; ?>" required>
                            </div>
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Direccion:</label>
                                <input type="text" class="form-control" id="direccionproveedor" name="direccionproveedor" value="<?php echo ($editar == 'SI') ? $proveedor->direccionproveedor : ''; ?>"required>
                            </div>
                        </div>
                        <?php if ($editar == 'NO') { ?>
                        <div class="row">
                            <div class="mb-1 col">
                                <label for="recipient-name" class="col-form-label">Fecha Registro:</label>
                                <input type="datetime" class="form-control" id="fchregisproveedor" name="fchregisproveedor" readonly>
                            </div>                            
                        </div>  
                        <?php } ?> 
                        <?php if ($editar == 'SI') { ?>              
                        <div class="row mb-1">
                            <label class="label col col-3">Estado</label>
                            <div class="col col-9">
                                <label>
                                    <input type="radio" id="statusproveedoredit" class="radiobox style-0" value="AC" <?php echo ($proveedor->statusproveedor == 'AC') ? 'checked="true" ' : ''; ?> name="statusproveedoredit" required>
                                    <span>Activo</span>
                                </label>
                                <label>
                                    <input type="radio" id="statusproveedoredit" class="radiobox style-0" value="DS" <?php echo ($proveedor->statusproveedor == 'DS') ? 'checked="true" ' : ''; ?> name="statusproveedoredit" required>
                                    <span>Desactivado</span>
                                </label>                           
                            </div>
                        </div>  
                        <?php } ?>                 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="frm_mant">Guardar</button>
                            <?php if ($editar == 'SI') { ?>
                            <input type="hidden" name="id_proveedor" value="<?php echo $proveedor->id_proveedor; ?>">
                            <?php } ?> 
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
    var elemento = document.getElementById('fchregisproveedor');
    if (elemento) {
        elemento.value = fechaHoraFormateada;
    } else {
        console.error('El elemento con ID "fchregisproveedor" no se encontró en el DOM.');
    }
}

$(document).ready(function() {
    setInterval(actualizarReloj, 1000);
    actualizarReloj(); 
});
</script>