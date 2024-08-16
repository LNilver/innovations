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
                <form id="frm_mant" class="" name="frm_evaluador" method="post" enctype="multipart/form-data" action="<?php echo base_url('Inventario_controlador/insertUsuario')?>">
                    <input type="hidden" name="editar" value="<?php echo $editar; ?>">
                    <div class="row">
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo ($editar == 'SI') ? $usuario->usuario : ''; ?>"required>


                        </div>                    
                        <div class="mb-1 col">
                            <label for="recipient-name" class="col-form-label">Correo:</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo ($editar == 'SI') ? $usuario->email : ''; ?>"required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="mb-1 col" style="position: relative;">
                                <label for="recipient-name" class="col-form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="clave" name="clave" value="<?php echo ($editar == 'SI') ? $usuario->clave : ''; ?>" required>
                                <button type="button" class="btn btn-light btn-sm p-1" onclick="togglePassword()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
                                    <i class="fas fa-eye" style="font-size: 0.75rem;"></i>
                                </button>
                            </div>
                            <?php if ($editar == 'NO') { ?>
                                <div class="mb-1 col">
                                    <label for="recipient-name" class="col-form-label">Fecha Registro:</label>
                                    <input type="datetime" class="form-control" id="fch_reggem" name="fch_reggem" readonly>
                                </div>                              
                            <?php } ?> 
                        </div> 
                        <div class="row">              
                        <div class="mb-1 col">
                            <label class="label col col-3">Rol</label>
                            <div class="col col-9">
                                <?php if ($editar == 'SI') { ?>
                                    <label>
                                        <input type="radio" id="rol" class="radiobox style-0" value="IN" <?php echo ($usuario->rol == 'IN') ? 'checked="true" ' : ''; ?> name="rol" required>
                                        <span>Instructor</span>
                                    </label>
                                    <label>
                                        <input type="radio" id="rol" class="radiobox style-0" value="ES" <?php echo ($usuario->rol == 'ES') ? 'checked="true" ' : ''; ?> name="rol" required>
                                        <span>Estudiante</span>
                                    </label>                           
                                <?php } else { ?>
                                    <label>
                                        <input type="radio" id="rol" class="radiobox style-0" value="IN" name="rol" required checked>
                                        <span>Instructor</span>
                                    </label>
                                    <label>
                                        <input type="radio" id="rol" class="radiobox style-0" value="ES" name="rol" required>
                                        <span>Estudiante</span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>

                        <?php if ($editar == 'SI') { ?>
                        <div class="mb-1 col">
                            <label class="label col col-3">Estado</label>
                            <div class="col col-9">
                                <label>
                                    <input type="radio" id="statuUsuario" class="radiobox style-0" value="AC" <?php echo ($usuario->statuUsuario == 'AC') ? 'checked="true" ' : ''; ?> name="statuUsuario" required>
                                    <span>Activo</span>
                                </label><br>
                                <label>
                                    <input type="radio" id="statuUsuario" class="radiobox style-0" value="DS" <?php echo ($usuario->statuUsuario == 'DS') ? 'checked="true" ' : ''; ?> name="statuUsuario" required>
                                    <span>Desactivado</span>
                                </label>                           
                            </div>
                        </div>
                        <?php } ?>  
                        </div>                                         
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="frm_mant">Guardar</button>
                            <?php if ($editar == 'SI') { ?>
                            <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario; ?>">
                            <?php } ?> 
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function togglePassword() {
    var passwordField = document.getElementById('clave');
    var eyeIcon = passwordField.nextElementSibling.querySelector('i');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}


function actualizarReloj() {
    var fechaHoraActual = new Date();
    var year = fechaHoraActual.getFullYear();
    var month = ('0' + (fechaHoraActual.getMonth() + 1)).slice(-2);
    var day = ('0' + fechaHoraActual.getDate()).slice(-2);
    var hours = ('0' + fechaHoraActual.getHours()).slice(-2);
    var minutes = ('0' + fechaHoraActual.getMinutes()).slice(-2);
    var seconds = ('0' + fechaHoraActual.getSeconds()).slice(-2);
    var fechaHoraFormateada = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
    var elemento = document.getElementById('fch_reggem');
    if (elemento) {
        elemento.value = fechaHoraFormateada;
    } else {
        console.error('El elemento con ID "fch_reggem" no se encontró en el DOM.');
    }
}

$(document).ready(function() {
    setInterval(actualizarReloj, 1000);
    actualizarReloj(); 
});
</script>